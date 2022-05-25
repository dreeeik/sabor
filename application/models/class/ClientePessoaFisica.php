<?php

namespace models_class;

use enums\NivelEnum;

/**
 * Description of Cliente
 *
 * @author dhiego
 */
class ClientePessoaFisica extends PessoaFisica{
    
    private string $nivel;
    
    public function __construct($input) {
        $this->setNivel(NivelEnum::setNivel(0));
        $this->setCpf($input['cpf']);
        $this->setNome($input['nome']);
        $this->setEmail($input['email']);
        $this->setTelefone($input['telefone']);
    }
    
    public function getNivel():string {
        return $this->nivel;
    }

    public function setNivel(string $nivel): void {
        $this->nivel = $nivel;
    }

}
