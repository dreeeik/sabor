<?php

/**
 * Description of Login
 *
 * @author dhiego balthazar
 */

namespace models_class;


class Login {
    
    public static function login($input, $hash): bool{
        return password_verify($input['username'].$input['senha'], $hash);
        
    }
    
    public function hashGenerate($username, $senha): string{
        return password_hash($username, $senha, PASSWORD_BCRYPT, ['cost'=>11]);
    }
    
    public static function isLoggedIn($controllerClass){
        $logged = false;
        if($controllerClass->session->has_userdata('usuario')){
            $controllerClass->load->model('ColaboradorDAO');
            $colaborador = $controllerClass->ColaboradorDAO->getByUsername($controllerClass->session->userdata('usuario')['username']);
            if($colaborador->getSessao() === 1){
                $logged = true;
            }else{
                $controllerClass->session->unset_userdata('usuario');
            }
        }
        return $logged;
    }
}