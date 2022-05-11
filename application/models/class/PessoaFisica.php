<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace models_class;

/**
 * Description of PessoaFisica
 *
 * @author dhieg
 */

use interfaces\Criavel;

class PessoaFisica extends Pessoa implements Criavel{
    private string $cpf;
    private string $nome;
    
    public function getCpf(): string {
        return $this->cpf;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setCpf(string $cpf): void {
        $this->cpf = $cpf;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }
    
    public static function create($input): Object {
        $this->setCpf($input->setCpf($input['cpf']));
        $this->setNome($input->setNome($input['nome']));
        $this->setEmail($input->setEmail($input['email']));
        $this->setTelefone($input->setTelefone($input['telefone']));
        return $this;
    }
    
}
