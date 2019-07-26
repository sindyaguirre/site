<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Teste de templete - Start Bootstrap Theme</title>

        <!-- Bootstrap core CSS -->
        <link href="<?= base_url("vendor/bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?= base_url("vendor/bootstrap/css/business-casual.min.css") ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?= base_url("vendor/bootstrap/css/bootstrap.css") ?>">
    </head>
    <body> 
        <section class="page-section about-heading">
            <div class="container">
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="<?= base_url("img/about.jpg") ?>"  alt="">
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4">
                                    <span class="section-heading-upper"><a href="<?= base_url("logar") ?>">Leia Mais</a>

                                    </span>
                                    <span class="section-heading-lower"><?= $about['titulo'] ?></span>
                                </h2>
                                <p><?= $about['descricao']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="<?= base_url("vendor/bootstrap/js/script.js") ?>"></script>

</html>
