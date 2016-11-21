<?php
namespace Tayron\exceptions;

use Tayron\exceptions\Exception;

/**
 * Classe de Exceção que gera log das exceções lançadas
 * 
 * @author Tayron Miranda <dev@tayron.com.br>
 */
final class NotFoundException extends Exception 
{    
    /**
     * NotFoundException::__construct
     * 
     * Recebe os parametos a serem disparados na exceção
     * 
     * @param string $parameter Nome do parametro não encontrado
     * @param string $message Mensagem personalizada de erro
     * 
     * @return void
     */
    public function __construct($parameter, $message = null) 
    {        
        parent::__construct($this->formatMessage($parameter, $message));
    }
    
    /**
     * NotFoundException::formatMessage
     * 
     * Formata e retorna a mensagem de erro
     * 
     * @param string $objeto Nome do objeto que não foi encontrado
     * @param string $message Mensagem personalizada
     * 
     * @return string Mensagem de erro a ser exibida para o usuário
     */
    private function formatMessage($objeto, $message = null)
    {
        $showMessage = ($message) ? $message 
            : 'Não foi possível encontrar <strong>%s</strong>';
                
        return sprintf($showMessage, ucfirst($objeto));
    }
}
