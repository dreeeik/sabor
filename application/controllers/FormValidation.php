<?php

namespace controllers;

/**
 * Description of FormValidation
 *
 * @author dhieg
 */



class FormValidation {
    
    private const REGEX_MATCH = "Você deve utilizar somente caracteres alfanumericos e os simbolos &, $, # e * no campo {field}";
    private const REQUIRED = "O campo {field} não pode estar vazio";
    
    private function getMensagens($controllerClass){
        $controllerClass->form_validation->set_message('regex_match', self::REGEX_MATCH);
        $controllerClass->form_validation->set_message('required', self::REQUIRED);
    }    
    
    public static function login($controllerClass){
        self::getMensagens($controllerClass);
        $controllerClass->form_validation->set_rules("username", "Username", "regex_match[/([A-Za-z0-9&$#*])\w+/]|required");
        $controllerClass->form_validation->set_rules("senha", "Senha", "regex_match[/([A-Za-z0-9&$#*])\w+/]|required");
        if($controllerClass->form_validation->run() == FALSE){
            return validation_errors();
        }else{
            return 1;
        }
    }
}
