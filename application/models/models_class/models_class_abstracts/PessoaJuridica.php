<?php

namespace models_class_abstracts;


abstract class PessoaJuridica extends Pessoa{
    private string $cnpj;
    private string $nomeFantasia;
    private string $razaoSocial;
    private string $inscricaoEstadual;
    
    public function __construct($input) {
        $this->setCnpj($input['cnpj']);
        $this->setNomeFantasia($input['nomeFantasia']);
        $this->setRazaoSocial($input['razaoSocial']);
        $this->setInscricaoEstadual($input['inscricaoEstadual']);
    }
    
    public function getCnpj(): string {
        return $this->cnpj;
    }

    public function getNomeFantasia(): string {
        return $this->nomeFantasia;
    }

    public function getRazaoSocial(): string {
        return $this->razaoSocial;
    }

    public function getInscricaoEstadual(): string {
        return $this->inscricaoEstadual;
    }

    public function setCnpj(string $cnpj): void {
        $this->cnpj = $cnpj;
    }

    public function setNomeFantasia(string $nomeFantasia): void {
        $this->nomeFantasia = $nomeFantasia;
    }

    public function setRazaoSocial(string $razaoSocial): void {
        $this->razaoSocial = $razaoSocial;
    }

    public function setInscricaoEstadual(string $inscricaoEstadual): void {
        $this->inscricaoEstadual = $inscricaoEstadual;
    }


}
