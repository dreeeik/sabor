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
        parent::setContentBody('html/dinamic/incluir_cliente');
    }
}