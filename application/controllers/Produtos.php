<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

    public function index() {

        //o banco de dados esta sendo chamado automaticamente pelo autoload
        $this->load->model("produtos_model");

        $produtos = $this->produtos_model->buscaTodos();

        $dados = array("produtos" => $produtos);

        $this->load->helper(array("currency"));

        $this->load->view("produtos/index.php", $dados);
    }

    public function formulario() {
        $this->load->view("produtos/formulario");
    }
    public function banner(){
        $this->load->view("produtos/banner");
    }

    public function novo() {
        /* a funcao library pode ser salva dentro de um helper */
        $this->load->library('form_validation');
        $this->form_validation->set_rules("nome", "nome", "trim|required|min_length[5]");
        $this->form_validation->set_rules("preco", "preco", "required");
        $this->form_validation->set_rules("descricao", "descricao", "trim|required|min_length[10]");
        /* a funcao set_error_delimiters pode ser salva dentro de um helper */
        $this->form_validation->set_error_delimiters('<p class="alert alert-danger">', "</p>");

        $success = $this->form_validation->run();
        if ($success) {
            $usuarioLocado = $this->session->userdata('usuario_logado');
            $produto = array(
                "nome" => $this->input->post("nome"),
                "descricao" => $this->input->post("descricao"),
                "preco" => $this->input->post("preco"),
                "idusuario" => $usuarioLocado['idusuario']
            );
            $this->load->model("produtos_model");
            $this->produtos_model->salva($produto);
            $this->session->set_flashdata("success", "Produtos cadastrado com sucesso!");
            redirect('/');
        } else {
            $this->load->view("produtos/formulario");
        }
    }

    public function mostra($idproduto) {

//        Caso queira utilizar get, mas nesta funcao o id esta sendo passado comom parametro 
//        $idproduto = $this->input->get("id"); 
  
        $this->load->model("produtos_model");
        $produto = $this->produtos_model->busca($idproduto);
        $dados = array("produtohtml" => $produto);

        $this->load->helper("typography");
        $this->load->view("produtos/mostra", $dados);
    }

    public function teste_val($nome) {
        $posicao = strpos($nome, 'melhor');
        if($posicao!=FALSE){
             return TRUE;
        }else{
            $this->form_validation->set_message("teste_val","O campo '%s' não pode conter a palavra 'melhor'");
            return FALSE;
        }
    }

}
