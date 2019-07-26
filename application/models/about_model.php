<?php

class About_model extends CI_Model {

    public function carregaAbout($idabout = 1) {
        $returnArray = $this->db->get_where(
                "pagina", array("idpagina" => $idabout))->row_array();
        return $returnArray;;
    }

}

?>