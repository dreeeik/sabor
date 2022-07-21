<?php

/**
 * Description of ColaboradorDAO
 *
 * @author dhiego balthazar
 */

use models_class\Colaborador;

class ColaboradorDAO extends CI_Model{
    
    public function save(){
        
    }
    
    public function getByUsername($username){
        $this->db->select('
            Colaboradores.idColaborador,Colaboradores.hashLogin,
            Colaboradores.username,
            PessoasFisicas.idPessoaFisica,
            PessoasFisicas.cpf,
            PessoasFisicas.nome,
            Pessoas.*');
        $this->db->from('Colaboradores');
        $this->db->join('PessoasFisicas', 'Colaboradores.idPessoaFisica = PessoasFisicas.idPessoaFisica', 'inner');
        $this->db->join('Pessoas', 'PessoasFisicas.idPessoa = Pessoas.idPessoa', 'inner');
        $this->db->where('Colaboradores.username', $username);
        $resultado = $this->db->get()->row();
        return $this->setObject($resultado);
    }
    
    private function setObject($result){
        if($result){
            $colaborador = new Colaborador();
            $colaborador->construct($result);
            return $colaborador;
        }else{
            return null;
        }
    }
    
}
