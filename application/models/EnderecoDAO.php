<?php

use models_class\Endereco;

class EnderecoDAO extends CI_Model{
    
    public function save(Endereco $endereco, int $idPessoa){
        $this->db->trans_start();
            $this->db->set('cep', $endereco->getCep());
            $this->db->set('logradouro', $endereco->getLogradouro());
            $this->db->set('tipo', $endereco->getTipoLogradouro());
            $this->db->set('bairro', $endereco->getBairro());
            $this->db->set('cidade', $endereco->getCidade());
            $this->db->insert('Enderecos');
            $idEndereco = $this->db->insert_id();
            $this->db->set('idEndereco', $idEndereco);
            $this->db->set('idPessoa', $idPessoa);
            $this->db->insert('Enderecos_has_Pessoas');
        $this->db->trans_complete();
        return $this->db->trans_status();
    }
}
