<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace models_class;

/**
 * Description of ClientePessoaJuridica
 *
 * @author dhieg
 */
class ClientePessoaJuridica extends Cliente{
    private PessoaJuridia $pessoaJuridica;
    
    public function getPessoaJuridica(): PessoaJuridica {
        return $this->pessoaJuridica;
    }

    public function setPessoaJuridica(PessoaJuridica $pessoaJuridica): void {
        $this->pessoaJuridica = $pessoaJuridica;
    }


}
