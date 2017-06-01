<?php
namespace Tayron\exceptions;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

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
     * @param string $trace Ativa ou desativa a exibiçaõ de trance do erro
     * 
     * @return void
     */
    public function __construct($message, $trace = true) 
    {        
        parent::__construct($message, 0, null);
        
        $this->writeLog($message, $trace);
    }
    
    /**
     * Exception::writeLog
     * 
     * Registra no log a mensagem de erro
     * 
     * @param string $message Mensagem personalizada de erro
     * @param string $trace Ativa ou desativa a exibiçaõ de trance do erro
     * 
     * @return void
     */
    private function writeLog($message, $trace = true)
    {
        $listaParametroObjeto = explode('\\', get_class($this));        
        $nomeExcecao = end($listaParametroObjeto);
        $traceMessage = ($trace) ? $this->getTrace() : array();	
		
        $logger = new Logger($nomeExcecao);
        $logger->pushHandler(new StreamHandler("logs/{$nomeExcecao}.log", Logger::WARNING));
        $logger->addError(strip_tags(str_replace('<br />', ' | ', $message)), $traceMessage);         
    }
}
