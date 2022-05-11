<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */
use models_class\ClientePessoaJuridica;
use models_class\ClientePessoaFisica;
/**
 * Description of ClienteDAO
 *
 * @author dhieg
 */
class ClienteDAO extends CI_Controller{
    
    public function __contruct(){
        $this->load->model('EnderecoDAO');
        $this->load->model('PessoaDAO');
    }
    
    public function saveClientePF(ClientePessoaFisica $cliente){
        
        $idEndereco = $this->EnderecoDAO->save($cliente->getPessoaFisica()->getEndereco());
        $this->db->set('nivelcliente',$cliente->getNivelCliente());
        $this->db->insert('Clientes');
    }
    
    public function saveClientePJ(ClientePessoaJuridica $cliente){
        
    }
    
}
