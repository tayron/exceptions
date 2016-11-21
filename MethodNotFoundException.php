<?php
namespace Tayron\exceptions;

use Tayron\exceptions\Exception;

/**
 * Classe de Exceção que gera log das exceções lançadas
 * 
 * @author Tayron Miranda <dev@tayron.com.br>
 */
final class MethodNotFoundException extends Exception 
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
    public function __construct($metodo, $controller, $message = null) 
    {          
        parent::__construct($this->formatMessage($metodo, $controller, $message));
    }
    
    /**
     * MethodNotFoundException::formatMessage
     * 
     * Formata e retorna a mensagem de erro
     * 
     * @param string $metodo Nome do método não encontrado
     * @param string $controller Nome do controller onde deveria existir o método
     * @param string $message Mensagem personalizada
     * 
     * @return string Mensagem de erro a ser exibida para o usuário
     */
    private function formatMessage($metodo, $controller, $message = null)
    {
        $showMessage = ($message) ? $message 
            : 'O método <strong>%s</strong> não foi encontrado no controller <strong>%s</strong>'; 
        return sprintf($showMessage, $metodo, $controller);
    }
}
