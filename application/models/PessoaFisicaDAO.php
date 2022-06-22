<?php

/**
 * Description of PessoaFisicaDAO
 *
 * @author Dhiego Balthazar
 */
class PessoaFisicaDAO {
    public function save($dados, $idPessoa){
        $this->db->trans_start();
            $this->db->set('cpf',$dados['cpf']);
            $this->db->set('nome',$dados['nome']);
            $this->db->set('idPessoa', $idPessoa);
            $this->db->insert('PessoasFisicas');
        $this->db->trans_complete();
        return $this->db->trans_status();
    }
}
