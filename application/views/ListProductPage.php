<?php

namespace views;
use views\PageFactory;
/**
 * Description of listProductPage
 *
 * @author dhieg
 */
class ListProductPage extends PageFactory{
    public function __construct() {
        parent::setHeader('html/static/header');
        parent::setContent('html/dinamic/listproduct');
        parent::setFooter('html/static/footer');
        parent::setJsCode('html/static/jscode');
    }
}
