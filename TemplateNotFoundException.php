<?php
namespace Tayron\exceptions;

use Tayron\exceptions\Exception;

/**
 * Classe de Exceção que gera log das exceções lançadas
 * 
 * @author Tayron Miranda <dev@tayron.com.br>
 */
final class TemplateNotFoundException extends Exception 
{    
    /**
     * TemplateNotFoundException::__construct
     * 
     * Recebe os parametos a serem disparados na exceção
     * 
     * @param string $template Nome do arquivo de view não encontrado
     * @param string $message Mensagem personalizada de erro
     * 
     * @return void
     */
    public function __construct($template, $message = null) 
    {        
        parent::__construct($this->formatMessage($template, $message));
    }
    
    /**
     * TemplateNotFoundException::formatMessage
     * 
     * Formata e retorna a mensagem de erro
     * 
     * @param string $template Nome do arquivo de viesão não encontrado
     * @param string $message Mensagem personalizada
     * 
     * @return string - Mensagem de erro a ser exibida para o usuário
     */
    private function formatMessage($template, $message = null)
    {
        $showMessage = ($message) ? $message 
            : 'O template <strong>%s</strong> não foi encontrado em <strong>/src/view/template</strong>';           
        return sprintf($showMessage, $template);
    }
}
