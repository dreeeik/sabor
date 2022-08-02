<?php

/**
 * Description of LoginController
 *
 * @author dhiego balthazar
 */

use views_factories\PageLoginFactory;
use controllers_class\FormValidation;
use models_class\Login;


class LoginController extends CI_Controller{
    
    //ROUTE: localhost/sabor
    public function index(){
        if($this->input->post()){
            $formValidation = FormValidation::login($this);
            if($formValidation === 1){
                $this->load->model('ColaboradorDAO');
                $colaborador = $this->ColaboradorDAO->getByUsername($this->input->post("username"));
                if($colaborador && $colaborador->login($this->input->post())){
                    $this->session->set_userdata('usuario', ['nomeUsuario' => $colaborador->getNome(),'username' => $colaborador->getUsername()]);
                    $this->ColaboradorDAO->updateSessao($colaborador->getIdColaborador(), 1);
                    redirect(base_url('clientes'));
                }else{
                    $this->session->set_flashdata('error', 'Usuário ou senha inválidos');
                    redirect(base_url());
                }
            }else{
                $this->session->set_flashdata('error', $formValidation);
                redirect(base_url());
            }
        }else{
            $page = new PageLoginFactory();
            $page->loadTemplate($this, $page, null);
        }
    }   
    
    public function sair(){
        if($this->session->has_userdata('usuario')){
            $this->load->model('ColaboradorDAO');
            $id = $this->ColaboradorDAO->getIdColaboradorByUsername($this->session->userdata('usuario')['username']);
            if($id){
                $this->ColaboradorDAO->updateSessao($id, 0);
            }
            $this->session->unset_userdata('usuario');
            
            redirect(base_url());    
        }
    }
}
