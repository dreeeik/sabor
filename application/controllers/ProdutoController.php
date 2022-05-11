<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'vendor/autoload.php';

use views\ListProductPage;
use views\InsertProductPage;


class ProdutoController extends CI_Controller {
    
    
    public function index(){
        $this->load->model('ProdutoDAO');
        $this->ProdutoDAO->getAll();
        $result["produtoLista"] = $this->ProdutoDAO->getAll();
        $result["menu"] = "produto";
        $page = new ListProductPage();
        $this->loadTemplate($page, $result);
    }
    
    public function inserirProduto(){
        $input = $this->input->post();
        $page = new InsertProductPage();
        if(! $input){
            $this->loadTemplate($page,null);
        }else{
            $dados["mensagem"] = "<b>Deu certo</b>";
            $this->loadTemplate($page,$dados);
        }
    }
    
    private function loadTemplate($page, $dados){
        $this->load->view($page->getHeader(),$dados);
        $this->load->view($page->getContent());
        $this->load->view($page->getFooter());
        $this->load->view($page->getJsCode());
    }
    
    /*
        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($produtos));
         * 
         */
}
