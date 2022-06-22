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

class ClienteController extends CI_Controller {
          
    public function index(){
        $page = new ListarClienteFactory();
        $this->loadTemplate($page, null);
    }
    
    public function incluirCliente(){
        $input = $this->input->post();
        if($input){
            if(isset($input['cpf'])){
                $cliente = $this->inserirClientePessoaFisica($input);
                $this->getSession()->setFlashdata('nomeCliente', $cliente->getNome());
                $this->load->library('session');
                $session->setFlashdata('nome', $cliente->getNome());
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
    
    private function loadTemplate($page, $dados){
        $this->load->view($page->getHeader(),$dados);
        $this->load->view($page->getContent());
        $this->load->view($page->getFooter());
        $this->load->view($page->getJsCode());
    }
}