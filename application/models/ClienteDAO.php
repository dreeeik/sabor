<?php


use models_class\ClientePessoaJuridica;
use models_class\ClientePessoaFisica;
/**
 * Description of ClienteDAO
 *
 * @author dhieg
 */
class ClienteDAO extends CI_Model{
    public function save($input){
        $this->db->trans_start();
            $this->db->set('nivelCliente', $input['nivel']);
            $this->db->set('eConsolidado', $input['eConsolidado']);
            $this->db->insert('Clientes');
        $this->db->trans_complete();
        if($this->db->trans_status() === FALSE){
            return $this->db->trans_status();
        }else{
            return $this->db->insert_id();
        }
    }    
}
