<?php


namespace models_class;

/**
 * Description of Endereco
 *
 * @author dhieg
 */

use interfaces\Criavel;

class Endereco implements Criavel{
    private string $cep;
    private string $logradouro;
    private string $bairro;
    private string $numero;
    private string $tipoLogradouro;
    
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
    
    public static function create($input){
        $this->setCep($input['cep']);
        $this->setLogradouro($input['logradouro']);
        $this->setBairro($input['bairro']);
        $this->setNumero($input['numero']);
        $this->setTipoLogradouro($input['tipoLogradouro']);
        return $this;
    }
}
