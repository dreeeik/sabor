<?php

namespace views;
use factories\PageFactory;
/**
 * Description of paginaListarCliente
 *
 * @author dhieg
 */
class ListarClienteFactory extends PageFactory{
    public function __construct() {
        parent::setHeader('html/static/header');
        parent::setContent('html/dinamic/listar_clientes');
        parent::setFooter('html/static/footer');
        parent::setJsCode('html/static/jscode');
    }
}