<html>

<head>
    <meta charset="utf-8">
    <title>Cadastro</title>
    <!--bootstrap-->
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-4.1.3-dist/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap-4.1.3-dist/popper.min.js"></script>
    <style>
        span {

            color: red;
        }

        .topo {
            width: 100%;
            height: 100px;
            background: #265c8a;
            margin-bottom: 20px;
        }

        .titulo {
            width: 50%;
            margin: 0 auto;
            padding-top: 10px;

        }

        p {
            color: #fff;
            margin: 0;
            padding: 0;
        }
    </style>


</head>

<body>
    <div class="topo">
        <div class="titulo">
            <p>Tribunal de Justiça do Estado do Amazonas</p>
            <p>Divisão de Tecnologia da informação e Comunicação</p>
            <p>Sistema de Alvará</p>
        </div>

    </div>

    <div class="container">

        <h4> Dados do Alvará</h4>
        <h6> Campos Obrigatorios <span>*</span></h6>


        <form action="" method="post" id="form_prepare">
            <fieldset>
                <label>Número da Conta Judicial <span>*</span>: <input type="text" name="N�mero da Conta Judicial" /></label>
                <br>
                <label>Data de Cadastro: <input type="text" name="Data de Cadastro" /></label>
                <br>
                <label>Processo: <input type="text" name="Processo" /></label>
                <br>
                <label>Sacador 1: <input type="text" name="Sacador 1" /></label>
                <br>
                <label>Documento: <input type="text" name="Documento" /></label>
                <br>
                <label>Representação Processual: <input type="text" name="RepProcessual" /></label>



        </form>




</body>

</html>