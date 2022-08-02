<?php

namespace models_class;
use models_class_abstracts\Pessoa;
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
