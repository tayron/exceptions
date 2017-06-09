<?php
namespace Tayron\exceptions;

/**
 * Classe de Exceção que gera log das exceções lançadas
 * 
 * @author Tayron Miranda <dev@tayron.com.br>
 */
class Exception extends \Exception 
{    
    /**
     * Exception::__construct
     * 
     * Recebe os parametos a serem disparados na exceção
     * 
     * @param string $message Mensagem personalizada de erro
     * 
     * @return void
     */
    public function __construct($message) 
    {        
        parent::__construct($message, 0, null);
    }
}
