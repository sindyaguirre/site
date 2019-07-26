<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="<?= base_url("vendor/bootstrap/css/bootstrap.css") ?>">
    </head>
    <body>
        <div class="container">
            <h1>Lista de usuários</h1>
            <?php
            foreach ($usuarios as $key => $value) {
                ?>
                <table class="table"> 
                    <tr>
                        <td><?= $value['nome'] ?></td>
                        <td><?= $value['email'] ?></td>
                    </tr>    
                </table>

                <?php
            }
            ?>

        </div>
    </body>
</html>