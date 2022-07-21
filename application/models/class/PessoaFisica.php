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

class PessoaFisica extends Pessoa{
    private string $cpf;
    private string $nome;
    
    
    public function construct($input){
        $this->setCpf($input->cpf);
        $this->setNome($input->nome);
        parent::construct($input);
    }   
    
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
    
    public function buscarPessoaFisicaDAO(){
        
    }
}
