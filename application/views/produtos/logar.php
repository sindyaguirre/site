<html lang="en">
    <head>
        <link rel="stylesheet" href="<?= base_url("vendor/bootstrap/css/bootstrap.css") ?>">

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
    </head>

    <body>
        <section>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="http://lorempixel.com/400/200?auto=yes&bg=777&fg=555&text=Primeiro Slide" alt="Primeiro Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="http://lorempixel.com/400/200/sports/1/Dummy-Text/?auto=yes&bg=666&fg=444&text=Segundo Slide" alt="Segundo Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://live.staticflickr.com/2578/3971523590_f07661a26c_z.jpg?auto=yes&bg=555&fg=333&text=Terceiro Slide" alt="Terceiro Slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>
        </section>
        <div class="container">
            <h1>Cadastro Produto</h1>
            <?php
            echo form_open("produtos/novo");
            ?> 
            <div class="row">
                <div class="form-group col-larg">
                    <?php
                    echo form_label('Nome', 'nome');
                    echo form_input(
                            array(
                                "name" => "nome",
                                "class" => "form_control",
                                "id" => "nome",
                                "maxlength" => "255",
                                "value" => set_value('nome', "")
                            )
                    );
                    echo form_error("nome");
                    ?> 
                </div>
            </div>
            <div class="row">
                <div class="form-group col-larg">
                    <?php
                    echo form_label('Preco', 'preco');
                    echo form_input(
                            array(
                                "name" => "preco",
                                "class" => "form_control",
                                "id" => "preco",
                                "maxlength" => "255",
                                "type" => "number",
                                "value" => set_value('preco', "")
                            )
                    );
                    echo form_error("preco");
                    ?> 
                </div>
            </div>
            <div class="row">
                <div class="form-group col-larg">
                    <?php
                    echo form_label('Descrição', 'descricao');
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-larg"> 
                    <?php
                    echo form_textarea(
                            array(
                                "name" => "descricao",
                                "class" => "form_control",
                                "id" => "descricao",
                                "value" => set_value('descricao', "")
                            )
                    );
                    echo form_error("descricao");
                    ?>
                </div>
            </div>
            <div class="form-group col-larg"> 
                <?php
                echo form_button(array(
                    'class' => "btn btn-primary",
                    'content' => "Cadastrar",
                    'type' => "submit"
                ));
                echo form_close();
                ?>
            </div>
        </div>
    </div>

</body>
</html>