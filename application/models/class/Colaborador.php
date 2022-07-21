<?php

namespace models_class;


/**
 * Description of Colaborador
 *
 * @author dhieg
 */
use controllers\Login;


class Colaborador extends PessoaFisica{
    
    private int $idColaborador;
    private string $hashLogin;
    private string $username;
    
    public function construct($input){
        if($input){
            $this->setIdColaborador($input->idColaborador);
            $this->setHashLogin($input->hashLogin);
            $this->setUsername($input->username);
        parent::construct($input);
        }
    }
    
    //getters and setters
    public function getIdColaborador(): int {
        return $this->idColaborador;
    }

    public function getHashLogin(): string {
        return $this->hashLogin;
    }

    public function getUsername(): string {
        return $this->username;
    }

    public function setIdColaborador(int $idColaborador): void {
        $this->idColaborador = $idColaborador;
    }

    public function setHashLogin(string $hashLogin): void {
        $this->hashLogin = $hashLogin;
    }

    public function setUsername(string $username): void {
        $this->username = $username;
    }
    
    public function login($input):bool{
        return Login::login($input, $this->getHashLogin());
    }
}
