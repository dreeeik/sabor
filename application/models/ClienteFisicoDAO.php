<?php

/**
 * Description of ClienteFisicoDAO
 *
 * @author Dhiego Balthazar
 */
class ClienteFisicoDAO extends CI_Model{
    public function save($idCliente, $cpf){
        $this->db->trans_start();
            $this->db->set('idCliente', $idCliente);
            $this->db->set('cpf', $cpf);
        $this->db->trans_complete();
        return $this->db->trans_status();
    }
}
