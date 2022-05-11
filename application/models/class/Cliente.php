<?php

namespace models_class;

/**
 * Description of Cliente
 *
 * @author dhieg
 */
abstract class Cliente{
    private int $idCliente;
    private int $nivelCliente;
    
    public function getIdCliente(): int {
        return $this->idCliente;
    }

    public function getNivelCliente(): int {
        return $this->nivelCliente;
    }

    public function setIdCliente(int $idCliente): void {
        $this->idCliente = $idCliente;
    }

    public function setNivelCliente(int $nivelCliente): void {
        $this->nivelCliente = $nivelCliente;
    }


}
