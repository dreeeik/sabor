<?php

/**
 * Description of ColaboradorDAO
 *
 * @author dhiego balthazar
 */
use models_class\Colaborador;

class ColaboradorDAO extends CI_Model {

    public function save() {
        
    }

    public function getByUsername($username) {
        $this->db->select('
            Colaboradores.idColaborador,Colaboradores.hashLogin,
            Colaboradores.username,
            Colaboradores.sessao,
            PessoasFisicas.idPessoaFisica,
            PessoasFisicas.cpf,
            PessoasFisicas.nome,
            Pessoas.*');
        $this->db->from('Colaboradores');
        $this->db->join('PessoasFisicas', 'Colaboradores.idPessoaFisica = PessoasFisicas.idPessoaFisica', 'inner');
        $this->db->join('Pessoas', 'PessoasFisicas.idPessoa = Pessoas.idPessoa', 'inner');
        $this->db->where('Colaboradores.username', $username);
        $resultado = $this->db->get()->row();
        return $this->createObject($resultado);
    }
    
    public function getIdColaboradorByUsername($username){
        $this->db->select('Colaboradores.idColaborador');
        $this->db->from('Colaboradores');
        $this->db->where('Colaboradores.username', $username);
        return $this->db->get()->row()->idColaborador;
    }
    
    public function getSessaoColaboradorByUsername($username){
        $this->db->select('Colaboradores.sessao');
        $this->db->from('Colaboradores');
        $this->db->where('Colaboradores.username', $username);
        return $this->db->get()->row()->sessao;
    }

    public function updateSessao($id, $sessao) {
        $this->db->trans_start();
        $this->db->where('idColaborador', $id);
        $this->db->update('Colaboradores', ['sessao' => $sessao]);
        $this->db->trans_complete();
    }

    private function createObject($result) {
        if ($result) {
            $colaborador = new Colaborador();
            $colaborador->construct($result);
            return $colaborador;
        } else {
            return null;
        }
    }

}
