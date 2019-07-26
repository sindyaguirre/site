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
    <body style="background: #F9F9F9">
        <div class="container">

            <form id="app" @submit.prevent="checkForm" action="#" method="post">
                <p v-if="errors.length">
                    <b>Por favor, corrija o(s) seguinte(s) erro(s):</b>
                <ul>
                    <li v-for="error in errors">{{ error }}</li>
                </ul>
                </p>
                <p>
                    <label for="usuario">Usuário</label>
                    <input id="usuario" v-model="usuario" type="text" name="usuario">
                </p>

                <p>
                    <label for="senha">Senha</label>
                    <input id="senha" v-model="senha" type="text" name="senha">
                </p>


                <p>
                    <input type="submit" value="Validar"  >
                </p>
            </form>
        </div>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>

    <script type="text/javascript">

        const app = new Vue({
            el: '#app',
            data: {
                errors: [],
                usuario: null,
                senha: null,
                movie: null
            },
            methods: {
                checkForm: function (e) {
                    if (this.usuario && this.senha) {
                        let currentObj = this;
                        console.info('currentObj');
                        console.info(currentObj);
                        axios.post('home', {
                            usuaro: this.usuario,
                            senha: this.senha
                        }).then(function (response) {
                            currentObj.output = response.data;
                        }).catch(function (error) {
                            currentObj.output = error;
                        });
                    }

                    this.errors = [];

                    if (!this.usuario) {
                        this.errors.push('O nome é obrigatório.');
                    }
                    if (!this.senha) {
                        this.errors.push('A senha é obrigatória.');
                    }

                    e.preventDefault();
//            this.formSubmit();
                }

            }
        })
                ;

    </script>

</html>
