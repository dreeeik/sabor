<?php


use models_class\ClientePessoaJuridica;
use models_class\ClientePessoaFisica;
/**
 * Description of ClienteDAO
 *
 * @author dhieg
 */
class ClienteDAO extends CI_Model{
    
    public function save(ClientePessoaFisica $cliente){
        $this->db->trans_start();
            $this->db->set('email', $cliente->getEmail());
            $this->db->set('telefone', $cliente->getTelefone());
            $this->db->insert('Pessoas');
            $idPessoa = $this->db->insert_id();
            $this->db->set('cpf',$cliente->getCpf());
            $this->db->set('nome', $cliente->getNome());
            $this->db->set('idPessoa', $idPessoa);
            $this->db->insert('PessoasFisicas');
            $idPessoaFisica = $this->db->insert_id();
            $this->db->set('nivelCliente', $cliente->getNivel());
            $this->db->insert('Clientes');
            $idCliente = $this->db->insert_id();
            $this->db->set('idPessoaFisica', $idPessoaFisica);
            $this->db->set('idCliente', $idCliente);
            $this->db->insert('Cliente_Fisico');
        $this->db->trans_complete();
        if($this->db->trans_status() !== FALSE){
            return $idPessoa;
        }else{
            return $this->db->trans_status();
        }
    }
    
    public function saveClientePJ(ClientePessoaJuridica $cliente){
        
    }
    
}
