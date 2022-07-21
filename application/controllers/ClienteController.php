<?php

/**
 * Description of ClienteController
 *
 * @author dhiego balthazar
 */
use models_class\ClientePessoaFisica;
use models_class\Endereco;
use views\ListarClienteFactory;
use views\IncluirClienteFactory;
use views\LoginFactory;

class ClienteController extends CI_Controller {
          
    public function index(){
        if($this->session->has_userdata('usuario')){
            $page = new ListarClienteFactory();
            $page->loadTemplate($this, $page, null);           
        }else{
            $this->session->set_flashdata('error','Por favor, faça seu login!');
            redirect(base_url());
        }
    }
    
    public function incluirCliente(){
        $input = $this->input->post();
        if($input){
            if(isset($input['cpf'])){
                $cliente = $this->inserirClientePessoaFisica($input);
                $this->getSession()->setFlashdata('nomeCliente', $cliente->getNome());
                $this->load->library('session');
                $this->session->setFlashdata('nome', $cliente->getNome());
                $page = new IncluirClienteFactory();
                $this->loadTemplate($page, null);
            }else{
                
            }
        }else{
            $page = new IncluirClienteFactory();
            $this->loadTemplate($page, null);
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
        
        //todo
    }
    
    private function importarModels(){
        $this->load->model('PessoaDAO');
        $this->laod->model('PessoaFisicaDAO');
        $this->load->model('ClienteDAO');
        $this->load->model('ClienteFisicoDAO');
        $this->load->model('EnderecoDAO');
    }
}