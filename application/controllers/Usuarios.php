<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function novo() {

        $usuario = array(
            "nome" => $this->input->post("nome"),
            "email" => $this->input->post("email"),
            "senha" => md5($this->input->post("senha"))
        );
        //o banco de dados já é chamado automaticamente pelo autoload
        //chamando a model
        $this->load->model("usuarios_model");

        //chamando o metodo para enviar os dados a serem salvos no banco
        $this->usuarios_model->salva($usuario);


        $usuarios = $this->usuarios_model->buscarTodos();

        $dados = array("usuarios" => $usuarios);
        $this->load->helper(array("url", "currency", "form"));

        //abrindo a view novo
        $this->load->view("usuarios/novo", $dados);
    }

    /**
     * ainda não utilizado
     */
    public function listar() {

        $this->load->model("usuarios_model");

        $usuarios = $this->usuarios_model->buscarTodos();

        $dados = array("usuarios" => $usuarios);
        $this->load->helper(array("url", "currency", "form"));

        $this->load->view("usuarios/novo.php", $dados);
    }

}
