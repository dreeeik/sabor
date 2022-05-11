<?php

namespace models_class;

use interfaces\Criavel;
/**
 * Description of ClientePessoaFisica
 *
 * @author dhieg
 */

class ClientePessoaFisica extends Cliente implements Criavel{
    private PessoaFisica $pessoaFisica;
    
    public function getPessoaFisica(): PessoaFisica {
        return $this->pessoaFisica;
    }

    public function setPessoaFisica(PessoaFisica $pessoaFisica): void {
        $this->pessoaFisica = $pessoaFisica;
    }
    
    public static function create(): Object {
        $this->setNivelCliente(0);
        return $this;
    }
}
