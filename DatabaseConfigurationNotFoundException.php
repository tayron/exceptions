<?php
namespace Tayron\exceptions;

use Tayron\exceptions\Exception;

/**
 * Classe de Exceção que gera log das exceções lançadas
 * 
 * @author Tayron Miranda <dev@tayron.com.br>
 */
final class DatabaseConfigurationNotFoundException extends Exception 
{    
    /**
     * DatabaseConfigurationNotFoundException::__construct
     * 
     * Recebe os parametos a serem disparados na exceção
     * 
     * @param string $arquivo Nome do arquivo de view não encontrado
     * @param string $message Mensagem personalizada de erro
     * 
     * @return void
     */
    public function __construct($arquivo, $message = null) 
    {        
        parent::__construct($this->formatMessage($arquivo, $message));
    }
    
    /**
     * DatabaseConfigurationNotFoundException::formatMessage
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
            : 'O arquivo de configuração com banco de dados não foi encontrado em <strong>%s</strong>';           
        return sprintf($showMessage, $template);
    }
}
