<?php

namespace models_class;

/**
 * Description of Pessoa
 *
 * @author dhieg
 */
abstract class Pessoa {
    private int $idPessoa;
    private string $email;
    private string $telefone;
    private Endereco $endereco;
    
    public function getIdPessoa(): int {
        return $this->idPessoa;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getTelefone(): string {
        return $this->telefone;
    }

    public function getEndereco(): Endereco {
        return $this->endereco;
    }

    public function setIdPessoa(int $idPessoa): void {
        $this->idPessoa = $idPessoa;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function setTelefone(string $telefone): void {
        $this->telefone = $telefone;
    }

    public function setEndereco(Endereco $endereco): void {
        $this->endereco = $endereco;
    }


}
