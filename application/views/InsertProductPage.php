<?php

namespace views;
use views\PageFactory;
/**
 * Description of listProductPage
 *
 * @author dhieg
 */
class InsertProductPage extends PageFactory{
    public function __construct() {
        parent::setContent('html/dinamic/inserir_cliente');
    }
}
