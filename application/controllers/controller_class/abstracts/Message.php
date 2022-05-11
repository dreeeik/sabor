<?php

/**
 * Description of Message
 *
 * @author dhiego.balthazar
 * 
 */

abstract class Message {
    private string $message;
    
    public function getMessage(): string{
        return $this->message;
    }
}
