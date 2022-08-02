<?php

namespace views_factories;

use views_factories_abstracts\PageFactory;

/**
 * Description of paginaListarCliente
 *
 * @author dhiego balthazar
 */

class PageIncluirClienteFactory extends PageFactory{
    
    public function __construct() {
        parent::__construct();
        parent::setContentBody('html/dinamic/incluir_cliente');
    }
    
    
}