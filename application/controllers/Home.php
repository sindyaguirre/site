<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {

        $this->load->model("about_model");
        $about = $this->about_model->carregaAbout();

        $dados = array("about" => $about);

        $this->load->view("home/index.php", $dados);
    }

}
