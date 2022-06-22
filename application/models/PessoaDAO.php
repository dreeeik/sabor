<?php

require_once 'vendor/autoload.php';
use interfaces\ObjectFactory;
use models_class\PessoaJuridica;
use models_class\PessoaFisica;
/**
 * Description of PessoaDAO
 *
 * @author dhieg
 */

use models_class\ClientePessoaFisica;
use model_class\Cliente;

class PessoaDAO extends CI_Model implements ObjectFactory{
    
    public function save($dados){
        $this->db->trans_start();
            $this->db->set('email',$dados['email']);
            $this->db->set('telefone',$dados['telefone']);
            $this->db->insert('Pessoas');
        $this->db->trans_complete();
        
        if($this->db->trans_status() === FALSE){
            return $this->db->trans_status();
        }else{
            return $this->db->insert_id();
        }
    }
    
    public function getPessoaFisica(string $cpf){
        $this->db->select('*');
        $this->db->from('Pessoas_Fisicas');
        $this->db->join('Pessoas', 'Pessoas_Fisicas.idPessoa = Pessoas.idPessoa', 'inner');
        $this->db->join('Enderecos', 'Pessoas.idEndereco = Enderecos.idEndereco', 'inner');
        $this->db->where('Pessoas_Fisicas.cpf', $cpf);
        return $this->createObject($this->db->get()->result());
    }
    
    public function getPessoaJuridica(string $cnpj){
        $this->db->select('*');
        $this->db->from('Pessoas_Juridicas');
        $this->db->join('Pessoas', 'Pessoas_Juridicas.idPessoa = Pessoas.idPessoa', 'inner');
        $this->db->join('Enderecos', 'Pessoas.idEndereco = Enderecos.idEndereco', 'inner');
        $this->db->where('Pessoas_Juridicas.cnpj', $cnpj);
        return $this->createObject($this->db->get()->result());
    }
    
    private function createObject($dados): mixed {
        if(isset($dados['cpf'])){
            $pessoa = new PessoaFisica();
            $pessoa->setCpf($dados('cpf'));
            $pessoa->setNome($dados('nome'));
            $pessoa->setIdPessoa($dados['idpessoa']);
            $pessoa->setTelefone($dados['telefone']);
            $pessoa->setEmail($dados['email']);
        }else{
            $pessoa = new PessoaJuridica();
            $pessoa->setCnpj($dados('cnpj'));
            $pessoa->setNomeFantasia($dados('nomefantasia'));
            $pessoa->setRazaoSocial($dados['razaosocial']);
            $pessoa->setInscricaoEstadual($dados['inscricaoestadual']);
            $pessoa->setIdPessoa($dados['idpessoa']);
            $pessoa->setTelefone($dados['telefone']);
            $pessoa->setEmail($dados['email']);
        }
        return $pessoa;
    }
}
