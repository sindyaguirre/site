<?php

/*
 * para que esta classe funcione deve ser ativado no arquivo de config migration
 */

class Migration_tabela_de_vendas extends CI_Migration {
    /*
     * esta funcao serve para criar uma tabela de dados
     */

    public function up() {
        /*
         * antes de 
         */
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'auto_increment' => true
            ),
            'idproduto' => array(
                'type' => 'INT'
            ),
            'idcomprador' => array(
                'type' => 'INT'
            ),
            'dataEntrega' => array(
                'type' => 'DATE'
            ),
        ));
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('vendas');
    }

    /*
     * serve para voltar/apagar a tabela do bando de dados
     */

    public function down() {
        $this->dbforge->drop_table('vendas');
    }

}
