<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function logar() {

        $this->load->model("usuarios_model");
        $email = $this->input->post("email");

        $senha = md5($this->input->post("senha"));
//        $this->load->library('javascript', array('script' => 'scripto'));
        $this->load->view('login/logar.php');
    }

    public function autenticar() {

        $this->load->model("usuarios_model");
        $email = $this->input->post("email");
        $senha = md5($this->input->post("senha"));

        //testando dados
        $usuario = $this->usuarios_model->buscarPorEmailESenha($email, $senha);

        if ($usuario) {
            //caso de sucesso, os dados serão salvos dentro de uma sessao
            $this->session->set_userdata("usuario_logado", $usuario);
            //esta funcao é responsável por mostrar uma mensagem apenas uma vez, onde não ficará salva.
            $this->session->set_flashdata("success", "Logado com sucesso!");
        } else {
            $this->session->set_flashdata("danger", "Não foi possível, dados inválidos!");
        }
        //a funcao de redirect é um helper, então deve ser ativado no helper em config/autoload
        redirect("/");
    }

    public function logout() {
        $this->session->unset_userdata("usuario_logado");
        $this->session->set_flashdata("success", "Deslogado com sucesso!");
        redirect("/");
    }

}

?>