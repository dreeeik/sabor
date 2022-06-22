<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of EnderecoPessoaDAO
 *
 * @author dhiego01
 */
class EnderecoPessoaDAO extends CI_Model{
    public function save(int $idEndereco, int $idPessoa){
        $this->db->trans_start();
            $this->db->set('idEndereco', $idEndereco);
            $this->db->set('idPessoa', $idPessoa);
            $this->db->insert('Enderecos_has_Pessoas');
        $this->db->trans_complete();
        return $this->db->trans_status();
    }
}
