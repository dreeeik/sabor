<?php

namespace views_factories;

use views_factories_abstracts\PageFactory;
/**
 * Description of paginaListarCliente
 *
 * @author dhiego balthazar
 */
class PageListarClienteFactory extends PageFactory{
    public function __construct() {
        parent::__construct();
        parent::setContentBody('html/dinamic/listar_clientes');
    }
    
    public function loadTemplate($class, $page, $dados){
        $class->load->view($page->getHeader(),$dados);
        $class->load->view($page->getContentHeader());
        $class->load->view($page->getContentBody());
        $class->load->view($page->getFooter());
        $class->load->view($page->getJsCode());
    }
}