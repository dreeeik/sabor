<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace models_class;

abstract class PessoaJuridica extends Pessoa{
    private string $cnpj;
    private string $nomeFantasia;
    private string $razaoSocial;
    private string $inscricaoEstadual;
    
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
