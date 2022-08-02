<?php

namespace controllers_factories;
use controllers_abstracts\MessageFactory;
use controllers_interfaces\Messager;
/**
 * Description of LoginMessage
 *
 * @author dhieg
 */
class LoginMessage extends MessageFactory implements Messager{
    
    public function __construct() {
        parent::__construct("Por favor, faça login!");
    }
    
    public function writeMessage(): string{
        return parent::getMenssagem();
    }
}
