<?php

namespace models_class;

use enums\NivelEnum;
use models_class\Endereco;

/**
 * Description of Cliente
 *
 * @author dhiego
 */
class ClientePessoaFisica extends PessoaFisica{
    
    private int $idCliente;
    private string $nivel;
    private int $consolidado;
    
    public function __construct($input, Endereco $endereco) {
        $this->setConsolidado(intval($input['eConsolidado']));
        $this->setNivel(NivelEnum::setNivel(0));
        $this->setCpf($input['cpf']);
        $this->setNome($input['nome']);
        $this->setEmail($input['email']);
        $this->setTelefone($input['telefone']);
        $this->setEndereco($endereco);
    }
    
    public function getNivel():string {
        return $this->nivel;
    }

    public function setNivel(string $nivel): void {
        $this->nivel = $nivel;
    }
    
    public function getConsolidado(): int {
        return $this->consolidado;
    }

    public function setConsolidado(int $consolidado): void {
        $this->consolidado = $consolidado;
    }
    
    public function getIdCliente(): int {
        return $this->idCliente;
    }

    public function setIdCliente(int $idCliente): void {
        $this->idCliente = $idCliente;
    }



}
