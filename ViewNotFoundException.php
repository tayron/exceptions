<?php
namespace Tayron\exceptions;

use Tayron\exceptions\Exception;

/**
 * Classe de Exceção que gera log das exceções lançadas
 * 
 * @author Tayron Miranda <dev@tayron.com.br>
 */
final class ViewNotFoundException extends Exception 
{    
    /**
     * ViewNotFoundException::__construct
     * 
     * Recebe os parametos a serem disparados na exceção
     * 
     * @param string $view Nome do arquivo de view não encontrado
     * @param string $path Local onde o arquivo deveria estar
     * @param string $message Mensagem personalizada de erro
     * 
     * @return void
     */
    public function __construct($view, $path, $message = null) 
    {        
        parent::__construct($this->formatMessage($view, $path, $message));
    }
    
    /**
     * ViewNotFoundException::formatMessage
     * 
     * Formata e retorna a mensagem de erro
     * 
     * @param string $view Nome do arquivo de viesão não encontrado
     * @param string $path Local onde o arquivo deveria estar
     * @param string $message Mensagem personalizada
     * 
     * @return string - Mensagem de erro a ser exibida para o usuário
     */
    private function formatMessage($view, $path, $message = null)
    {
        $showMessage = ($message) ? $message 
            : 'A view <strong>%s</strong> não foi encontrado em <strong>%s</strong>';           
        return sprintf($showMessage, $view, $path);
    }
}
