<html lang="en">
    <head>
        <link rel="stylesheet" href="<?= base_url("vendor/bootstrap/css/bootstrap.css") ?>">
    </head>
    <body> 
        <div class="container">
            <?php if ($this->session->flashdata("success")) { ?>
                <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
            <?php } else if ($this->session->flashdata("danger")) { ?>

                <p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
            <?php } ?>
            <h1>Produtos</h1>
            <?php
            foreach ($produtos as $key => $value) {
                ?>
                <table class="table"> 
                    <tr>
                        <td><?= anchor("produtos/{$value['idproduto']}", $value['nome']) ?></td>
                        <!--aqui nos carregaremos um helper de text para limitar o texto-->
                        <td><?= character_limiter($value['descricao'], 10) ?></td>
                        <td><?= numeroEmReais($value['preco']) ?></td>
                    </tr>    
                </table>

                <?php
            }
            if ($this->session->userdata("usuario_logado")) {
                /*
                 * mostra link caso já esteja logado
                 */
                echo anchor("login/logout", "Logout", array("class" => "btn btn-primary"));
                echo anchor("produtos/formulario", "Novo produto", array("class" => "btn btn-primary"));
            } else {
                /*
                 * solicita login
                 */
                ?>
                <h1>Login</h1>
                <?php
//abrindo um formulario
                echo form_open("login/autenticar");
                echo form_label("Email", "email");
                echo form_input(array(
                    'name' => 'email',
                    'id' => 'email',
                    'class' => 'form-control',
                    'maxlength' => '255'
                ));

                echo form_label("Senha", "senha");
                echo form_password(array(
                    'name' => 'senha',
                    'id' => 'senha',
                    'class' => 'form-control',
                    'maxlength' => '255'
                ));

                echo form_button(array(
                    'class' => 'btn btn-primary',
                    'content' => 'Logar',
                    'type' => 'submit'
                ));

                echo form_close();
                ?>            
                <h1>Cadastros</h1>            
                <?php
//abrindo um formulario
                echo form_open("usuarios/novo");
                /* aqui é montado/chamado os campos com todas suas carcteristicas
                 * não esquecendo que para tanto, é preciso inicializar com helper('form') no controller */
                echo form_label("Nome", "nome");
                echo form_input(array(
                    'name' => 'nome',
                    'id' => 'nome',
                    'class' => 'form-control',
                    'maxlength' => '255'
                ));

                echo form_label("Email", "email");
                echo form_input(array(
                    'name' => 'email',
                    'id' => 'email',
                    'class' => 'form-control',
                    'maxlength' => '255'
                ));

                echo form_label("Senha", "senha");
                echo form_password(array(
                    'name' => 'senha',
                    'id' => 'senha',
                    'class' => 'form-control',
                    'maxlength' => '255'
                ));

                echo form_button(array(
                    'class' => 'btn btn-primary',
                    'content' => 'Cadastrar',
                    'type' => 'submit'
                ));

                echo form_close();
            }
            ?>

        </div>
    </body>
</html>