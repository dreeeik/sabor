<?php

namespace models_class;
/**
 * Description of Produto
 *
 * @author Dhiego Balthazar
 */

class Produto {
    private int $idProduto;
    private string $descricaoProduto;
    private string $imagemProduto;
    private float $valorUnitario;
    private int $quantidade;
    private string $codigoDeBarras;
    
    public function __construct() {
        $this->idProduto = 0;
        $this->descricaoProduto = "No Description";
        $this->imagemProduto = "No Image";
        $this->valorUnitario = 0.0;
        $this->quantidade = 0;
        $this->codigoDeBarras = "No BarCode";
    }
    
    public function getIdProduto(): int {
        return $this->idProduto;
    }

    public function getDescricaoProduto(): string {
        return $this->descricaoProduto;
    }

    public function getImagemProduto(): string {
        return $this->imagemProduto;
    }

    public function getValorUnitario(): float {
        return $this->valorUnitario;
    }

    public function getQuantidade(): int {
        return $this->quantidade;
    }

    public function getCodigoDeBarras(): string {
        return $this->codigoDeBarras;
    }

    public function setIdProduto(int $idProduto): void {
        $this->idProduto = $idProduto;
    }

    public function setDescricaoProduto(string $descricaoProduto): void {
        $this->descricaoProduto = $descricaoProduto;
    }

    public function setImagemProduto(string $imagemProduto): void {
        $this->imagemProduto = $imagemProduto;
    }

    public function setValorUnitario(float $valorUnitario): void {
        $this->valorUnitario = $valorUnitario;
    }

    public function setQuantidade(int $quantidade): void {
        $this->quantidade = $quantidade;
    }

    public function setCodigoDeBarras(string $codigoDeBarras): void {
        $this->codigoDeBarras = $codigoDeBarras;
    }
    
    private function subtrairQuantidade(int $subtraendo): void{
        $this->quantidade = $this->quantidade - $subtraendo;
    }
    
    private function somarQuantidade(int $parcela): void{
        $this->quantidade = $this->quantidade + $parcela;
    }
    
    private function matches(int $subtraendo): bool{
        if($this->quantidade < $subtraendo){
            return false;
        }
        return true;
    }
    
    public function retirarDoEstoque(int $quantidade): bool{
        if($this->matches($quantidade)){
            $this->subtrairQuantidade($quantidade);
            return true;
        }
        return false;
    }
    
    public function acrescentarNoEstoque(int $quantidade): bool{
        if($this->matches($quantidade)){
            $this->somarQuantidade($quantidade);
            return true;
        }
        return false;
    }
}