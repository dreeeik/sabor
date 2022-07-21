<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of LoginController
 *
 * @author dhiego balthazar
 */


use views\LoginFactory;
use controllers\FormValidation;


class LoginController extends CI_Controller{
    
    //ROUTE: localhost/sabor
    public function index(){
        if($this->session->has_userdata('usuario')){
            redirect(base_url('clientes'));    
        }
        if($this->input->post()){
            $formValidation = FormValidation::login($this);
            if($formValidation === 1){
                $this->load->model('ColaboradorDAO');
                $colaborador = $this->ColaboradorDAO->getByUsername($this->input->post("username"));
                if($colaborador && $colaborador->login($this->input->post())){
                    $this->session->set_userdata('usuario', ['nomeUsuario' => $colaborador->getNome(),'username' => $colaborador->getUsername()]);
                    redirect(base_url('clientes'));
                }else{
                    $this->session->set_flashdata('error', 'Usuário ou senha inválidos');
                    redirect(base_url());
                }
            }else{
                $this->session->set_flashdata('error',$formValidation);
                redirect(base_url());
            }
        }else{
            $page = new LoginFactory();
            $page->loadTemplate($this, $page, null);
        }
    }   
    
    public function sair(){
        if($this->session->has_userdata('usuario')){
            $this->session->unset_userdata('usuario');
            redirect(base_url());    
        }
    }
}
