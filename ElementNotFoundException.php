<?php
namespace Tayron\exceptions;

use Tayron\exceptions\Exception;

/**
 * Classe de Exceção que gera log das exceções lançadas
 * 
 * @author Tayron Miranda <dev@tayron.com.br>
 */
final class ElementNotFoundException extends Exception 
{    
    /**
     * ElementNotFoundException::__construct
     * 
     * Recebe os parametos a serem disparados na exceção
     * 
     * @param string $elemento Nome do elemento não encontrado
     * @param string $message Mensagem personalizada de erro
     * 
     * @return void
     */
    public function __construct($elemento, $message = null) 
    {        
        parent::__construct($this->formatMessage($elemento, $message));
    }
    
    /**
     * ElementNotFoundException::formatMessage
     * 
     * Formata e retorna a mensagem de erro
     * 
     * @param string $elemento Nome do elemento (arquivo de visão) não encontrado
     * @param string $message Mensagem personalizada
     * 
     * @return string - Mensagem de erro a ser exibida para o usuário
     */
    private function formatMessage($elemento, $message = null)
    {
        $showMessage  = ($message) ? $message 
            : 'O elemento <strong>%s</strong> não foi encontrado no '
            . 'diretório <strong>/src/view/elementos/</strong>';        
        return sprintf($showMessage, $elemento);
    }
}
