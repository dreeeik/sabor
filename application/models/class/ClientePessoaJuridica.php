<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace models_class;

/**
 * Description of ClientePessoaJuridica
 *
 * @author dhiego
 */
class ClientePessoaJuridica {
    private $nivel;
    
    public function getNivel() {
        return $this->nivel;
    }

    public function setNivel($nivel): void {
        $this->nivel = $nivel;
    }


}
