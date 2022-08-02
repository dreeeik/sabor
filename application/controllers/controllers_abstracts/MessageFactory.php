<?php

namespace controllers_abstracts;

/**
 * Description of MessageFactory
 *
 * @author dhieg
 */
abstract class MessageFactory{
    
    private string $menssagem;
    
    public function __construct($mensagem){
        $this->mensagem = $mensagem;
    }
    
    public function getMenssagem(): string {
        return $this->mensagem;
    }
}
