<?php
namespace Tayron\exceptions;

use Tayron\exceptions\Exception;

/**
 * Classe de Exceção que gera log das exceções lançadas
 * 
 * @author Tayron Miranda <dev@tayron.com.br>
 */
final class ControllerNotFoundException extends Exception 
{    
    /**
     * MethodNotFoundException::__construct
     * 
     * Recebe os parametos a serem disparados na exceção
     * 
     * @param string $metodo Nome do método não encontrado
     * @param string $controller Nome do controller onde o método deveria existir
     * @param string $message Mensagem personalizada de erro
     * 
     * @return void
     */
    public function __construct($controller, $message = null) 
    {          
        parent::__construct($this->formatMessage($controller, $message));
    }
    
    /**
     * MethodNotFoundException::formatMessage
     * 
     * Formata e retorna a mensagem de erro
     * 
     * @param string $controller Nome do controller não encontrado
     * @param string $message Mensagem personalizada
     * 
     * @return string Mensagem de erro a ser exibida para o usuário
     */
    private function formatMessage($controller, $message = null)
    {
        $showMessage = ($message) ? $message 
            : 'O controller <strong>%s</strong> não foi encontrado'; 
        return sprintf($showMessage, $controller);
    }
}
