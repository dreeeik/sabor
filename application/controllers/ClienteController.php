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
                $endereco = new Endereco($input);
                $cliente = new ClientePessoaFisica($input);
                $cliente->setEndereco($endereco);
                $this->load->model('ClienteDAO');
                $idPessoa = $this->ClienteDAO->save($cliente);
                $this->load->model('EnderecoDAO');
                $enderecoOK = $this->EnderecoDAO->save($endereco, $idPessoa);
                $this->index();
            }else{
                
            }
        }else{
            $page = new IncluirClienteFactory();
            $this->loadTemplate($page, null);
        }
    }
    
    private function loadTemplate($page, $dados){
        $this->load->view($page->getHeader(),$dados);
        $this->load->view($page->getContent());
        $this->load->view($page->getFooter());
        $this->load->view($page->getJsCode());
    }
}