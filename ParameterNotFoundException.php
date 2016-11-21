<?php
namespace Tayron\exceptions;

use Tayron\exceptions\Exception;

/**
 * Classe de Exceção que gera log das exceções lançadas
 * 
 * @author Tayron Miranda <dev@tayron.com.br>
 */
final class ParameterNotFoundException extends Exception
{    
    /**
     * ParameterNotFoundException::__construct
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
     * ParameterNotFoundException::formatMessage
     * 
     * Formata e retorna a mensagem de erro
     * 
     * @param string $parameter Nome do parametro não informado
     * @param string $message Mensagem personalizada
     * 
     * @return string Mensagem de erro a ser exibida para o usuário
     */
    private function formatMessage($parameter, $message = null)
    {
        $showMessage = ($message) ? $message 
            : 'O parametro com <strong>%s</strong> não foi informado';
        
        return sprintf($showMessage, ucfirst($parameter));
    }
}
