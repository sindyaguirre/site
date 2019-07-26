<?php

class Produtos_model extends CI_Model {

    public function busca($idproduto) {
        $returnArray = $this->db->get_where(
                        "produtos", array("idproduto" => $idproduto)
                )->row_array();
        return $returnArray;
    }

    public function buscaTodos() {
        return $this->db->get("produtos")->result_array();
    }

    public function salva($produto) {
        $this->db->insert("produtos", $produto);
    }

}
