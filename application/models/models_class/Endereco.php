<?php


namespace models_class;

/**
 * Description of Endereco
 *
 * @author dhieg
 */

class Endereco{
    private string $cep;
    private string $logradouro;
    private string $bairro;
    private string $numero;
    private string $tipoLogradouro;
    private string $cidade;
    
    public function __construct($input) {
        $this->setCep($input['cep']);
        $this->setLogradouro($input['logradouro']);
        $this->setBairro($input['bairro']);
        $this->setNumero($input['numero']);
        $this->setTipoLogradouro($input['tipoLogradouro']);
        $this->setCidade($input['cidade']);
    }


    public function getCep(): string {
        return $this->cep;
    }

    public function getLogradouro(): string {
        return $this->logradouro;
    }

    public function getBairro(): string {
        return $this->bairro;
    }

    public function getNumero(): string {
        return $this->numero;
    }

    public function getTipoLogradouro(): string {
        return $this->tipoLogradouro;
    }

    public function setCep(string $cep): void {
        $this->cep = $cep;
    }

    public function setLogradouro(string $logradouro): void {
        $this->logradouro = $logradouro;
    }

    public function setBairro(string $bairro): void {
        $this->bairro = $bairro;
    }

    public function setNumero(string $numero): void {
        $this->numero = $numero;
    }

    public function setTipoLogradouro(string $tipoLogradouro): void {
        $this->tipoLogradouro = $tipoLogradouro;
    }
    
    public function getCidade(): string {
        return $this->cidade;
    }

    public function setCidade(string $cidade): void {
        $this->cidade = $cidade;
    }


}
