<?php

/**
 * Description of ClienteController
 *
 * @author dhiego balthazar
 */

use models_class\Login;
use models_class\ClientePessoaFisica;
use models_class\Endereco;
use views_factories\PageListarClienteFactory;
use views_factories\PageIncluirClienteFactory;
use controllers_factories\LoginMessage;


class ClienteController extends CI_Controller{
    
    
    private $message;
    
    public function __construct(){
        parent::__construct();
        if(!Login::isLoggedIn($this)){
            $this->message = new LoginMessage();
            $this->session->set_flashdata('error', $this->message->getMenssagem());
            redirect(base_url());
        }
    }             
    public function index(){
        $page = new PageListarClienteFactory;
        $page->loadTemplate($this, $page, null);           
    }
    
    public function incluirCliente(){
        
        $input = $this->input->post();
        if($input){
            if(isset($input['cpf'])){
                $cliente = $this->inserirClientePessoaFisica($input);
                $this->getSession()->setFlashdata('nomeCliente', $cliente->getNome());
                $this->load->library('session');
                $this->session->setFlashdata('nome', $cliente->getNome());
                redirect(base_url("clientes/incluir_cliente"));
            }else{
                
            }
        }else{
            $page = new PageIncluirClienteFactory();
            $page->loadTemplate($this, $page, null);
        }
    }      
    
    private function inserirClientePessoaFisica($input){
        $endereco = new Endereco($input);
        $cliente = new ClientePessoaFisica($input, $endereco);
        $this->importarModelsModels();
        $idPessoa = $this->PessoaDAO->save(['email'=>$cliente->getEmail(),'telefone'=>$cliente->getTelefone()]);
        if($idPessoa !== FALSE){//pessoa included
            $cliente->setIdPessoa($idPessoa);
            if($this->PessoaFisicaDAO->save(['cpf'=>$cliente->getCpf(), 'nome'=>$cliente->getNome(), 'idPessoa'=>$cliente->getIdPessoa()])){
                $idCliente = $this->ClienteDAO->save(['nivelCliente'=>$cliente->getNivel(), 'eConsolidado'=>$cliente->getConsolidado()]);
                if(!$idCliente!== FALSE){
                    $cliente->setIdCliente($idCliente);
                    $this->ClienteFisicoDAO->save(['cpf'=>$cliente->getCpf(), 'idCliente'=>$cliente->getIdCliente()]);
                    return $cliente;
                }
            }
        }else{
            return FALSE;
        }
        
    }
    
    private function criarEndereco($input, $idPessoa){
        //to do
    }
}