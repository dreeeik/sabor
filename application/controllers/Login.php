<?php

/**
 * Description of Login
 *
 * @author dhiego balthazar
 */

namespace controllers;

class Login {
    
    public static function login($input, $hash): bool{
        if(password_verify($input['username'].$input['senha'], $hash)){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
    public function hashGenerate($username, $senha): string{
        return password_hash($username, $senha, PASSWORD_BCRYPT, ['cost'=>11]);
    }
    
    public function isLogado($controllerClass){
        $loggedIn = false;
        if($this->session->has_userdata('usuario')){
            $controllerClass->load->model('ColaboradorDAO');
            $colaborador = $controllerClass->ColaboradorDAO->getByUsername($this->session->userdata('usuario')['username']);
            if($colaborador->getSession() === 1){
                $loggedIn = true;
            }else{
                $this->session->unset_userdata('usuario');
            }
        }
        return loggedIn;
    }
    
}