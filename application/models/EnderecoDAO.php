<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of EnderecoDAO
 *
 * @author dhieg
 */


class EnderecoDAO extends CI_Model{
    public function save(Endereco $endereco): int{
        return $this->db->insert('Enderecos', $endereco);
        
    }
}
