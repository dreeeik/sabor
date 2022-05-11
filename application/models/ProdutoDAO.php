<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use models_class\Produto;

class ProdutoDAO extends CI_Model{
	public function save(Produto $produto){
		return $this->db->set($produto)->get_compiled_insert('produtos');
	}
        
        public function getByCode(int $code): object{
            $this->db->select('*');
            $this->db->from('Produtos');
            $this->db->where('idProduto', $code);
            $result = $this->db->get()->result();
            return $this->criarProduto($result);
        }
        
        public function getAll(): mixed{
            $this->db->select('*');
            $this->db->from('Produtos');
            return $this->db->get()->result();
        }
        
        private function criarProduto($result): object{
            $produto = new Produto();
            $produto->setIdProduto($result->idProduto);
            $produto->setDescricaoProduto($result->descricaoProduto);
            $produto->setImagemProduto($result->imagemProduto);
            $produto->setValorUnitario((float)$result->valorUnitario);
            $produto->setQuantidade($result->quantidade);
            $produto->setCodigoDeBarras($result->quantidade);
            return $produto;
        }
}