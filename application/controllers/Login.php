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
    
}