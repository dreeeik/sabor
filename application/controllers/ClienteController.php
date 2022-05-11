<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of ClienteController
 *
 * @author dhieg
 */
use models_class\PessoaFisica;
use models_class\ClientePessoaFisica;
use models_class\Endereco;
class ClienteController extends CI_Controller {
    
    public function index(){
        
    }
    
    public function cadastrarCliente(){
        $input = $this->input->post();
        if($input){
            $endereco = $this->criarEndereco($input);
            if(isset($input['cpf'])){
                //criarPessoaFisica
                $endereco = Endereco::create($input);
                $pessoaFisica = PessoaFisica::create($input);
                $pessoaFisica->setEndereco($endereco);
                $clientePessoaFisica = ClientePessoaFisica::create($input);
                $clientePessoaFisica->setPessoaFisica($pessoaFisica);
                $this->load->model('ClienteDAO');
                $this->ClienteDAO->saveClientePF($clientePessoaFisica);
            }else{
                //criarPessoaJuridica
            }
        }else{
            
        }
        
    }
    
}
