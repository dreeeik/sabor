<?php

namespace views;
use factories\PageFactory;
/**
 * Description of paginaListarCliente
 *
 * @author dhiego balthazar
 */
class IncluirClienteFactory extends PageFactory{
    public function __construct() {
        parent::setHeader('html/static/header');
        parent::setContent('html/dinamic/incluir_cliente');
        parent::setFooter('html/static/footer');
        parent::setJsCode('html/static/jscode');
    }
}