<?php
namespace Tayron\exceptions;

use Tayron\exceptions\Exception;

/**
 * Classe de Exceção que gera log das exceções lançadas
 * 
 * @author Tayron Miranda <dev@tayron.com.br>
 */
final class FileNotFoundException extends Exception 
{    
    /**
     * FileNotFoundException::__construct
     * 
     * Recebe os parametos a serem disparados na exceção
     *      
     * @param string $pathArquivo Local onde o arquivo deveria estar
     * @param string $message Mensagem personalizada de erro
     * 
     * @return void
     */
    public function __construct($pathArquivo, $message = null) 
    {        
        parent::__construct($this->formatMessage($pathArquivo, $message));
    }
    
    /**
     * FileNotFoundException::formatMessage
     * 
     * Formata e retorna a mensagem de erro
     * 
     * @param string $pathArquivo Local onde o arquivo deveria estar
     * @param string $message Mensagem personalizada
     * 
     * @return string - Mensagem de erro a ser exibida para o usuário
     */
    private function formatMessage($pathArquivo, $message = null)
    {
        $showMessage = ($message) ? $message 
            : 'Arquivo não encontrado em: <strong>%s</strong>';           
        return sprintf($showMessage, $pathArquivo);
    }
}
