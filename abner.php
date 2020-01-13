<html>

<head>
    <meta charset="utf-8">
    <title>Cadastro</title>
    <!--bootstrap-->
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-4.1.3-dist/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap-4.1.3-dist/popper.min.js"></script>
    <script>
        $(document).ready(function() {

                    $('#selecionado').click(function() {
                        var valorSelecionado = $('#selecionado').val();
                        alert(valorSelecionado);
                        $('#sacador2 :selected').text(valorSelecionado);
                        $('#sacador2 :selected').val(valorSelecionado);
                    });


                    $('#selecionado').mouseout(function(event) {
                        if ($('#search').val().length > 0) {
                            $.ajax({
                                url: 'consultar.php',
                                method: 'POST',
                                data: $('#sacador1').serialize(),
                                success: function(data) {
                                    $('#teste').html(data);
                                },

                            });

                        }





                    });
    </script>


</head>

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

    h6 {
        color: #fff;
        margin: 0;
        padding: 0;
    }
</style>


</head>

<body>
    <div class="topo">
        <div class="titulo">
            <h6>Tribunal de Justiça do Estado do Amazonas</h6>
            <h6>Divisão de Tecnologia da informação e Comunicação</h6>
            <h6>Sistema de Alvará</h6>
        </div>

    </div>

    <div class="container">
        <h4> Dados do Alvará</h4>
        <h4> Campos Obrigatorios *</h4>
        <form method="POST" action="validar_cadastro.php" onsubmit="return valida_dados(this)">
            <div class="row">
                <div class="col-md-6 form-group">
                    *Número da conta judicial:
                    <input type="text" name="num_conta_judicial" size="16">
                </div>
                <div class="col-md-6 form-group"> *processo: <input type="text" name="num_processo" size="11">
                </div>
                <div class="col-md-6 form-group"> Data de validade: <input type="date" name="data_validade" size="23"></div>

                <div class="col-md-6 form-group">
                    <textarea name="observacao" id="teste" cols="30" rows="5"></textarea>
                </div>

            </div>
            <p>*Natureza do sacador 1:</p>
            <div class="row">
                <div class="col-md-4 form-group">
                    <input type="radio" name="naturezadosacador" value="fisica"> Pessoa Física
                    <input type="radio" name="naturezadosacador" value="juridica"> Pessoa Jurídica
                </div>
                <div class="col-md-4 form-group">
                    <?php
                    require_once("conexao.php");
                    $con = new Conexao();
                    $link = $con->conecta();
                    $sql = "SELECT * FROM dados_sacador ";
                    $re = mysqli_query($link, $sql);
                    if ($re) {
                    } else {
                        echo "Erro ao conectar ao banco de dados";
                    }



                    ?>
                    Nome sacador:<br>
                    <select name="sacador1" id="selecionado">
                        <option value=""></option>
                        <?php while ($result = mysqli_fetch_assoc($re)) {

                            $nome_sacador = $result['nome_sacador'];
                            $cpf = $result['cpf'];
                        ?>
                            <option value="<?php echo $nome_sacador; ?>"><?php echo $nome_sacador; ?></option>

                        <?php } ?>
                    </select>
                </div>
                <div class="col-md-4 form-group">

                    <?php
                    $sql = "SELECT * FROM dados_sacador where  ";

                    $re = mysqli_query($link, $sql);

                    ?>
                    *CPF:<br>
                    <input type="text" value="<?php echo $cpf; ?>">

                </div>

            </div>
            <p>Natureza do sacador 2:</p>
            <div class="row">
                <div class="col-md-4 form-group">
                    <input type="radio" name="naturezadosacador2" value="nao_existe"> Não existe
                    <input type="radio" name="naturezadosacador2" value="fisica"> Pessoa Física
                    <input type="radio" name="naturezadosacador2" value="juridica"> Pessoa Jurídica
                </div>
                <div class="col-md-4 form-group">

                    Nome sacador:<br />
                    <select id="sacador2">
                        <option id="option" value=""></option>
                        <option value="Mateus"></option>


                    </select>

                </div>
                <div class="col-lg-4 form-group">
                    CPF:<br />
                    <input type="text" name="CPF" size="11">
                </div>




            </div>
            <p>*Representação Processual:</p>
            <div class="row">

                <div class="col-md-3 form-group">
                    <input type="radio" name="representante" value="Advogado">Advogado
                    <input type="radio" name="representante" value="Postulandi">Jus Postulandi<br>

                </div>
                <div class="col-md-3 form-group">
                    *Nome do Advogado:<br>
                    <select>
                        <option value=""></option>
                        <option value="Mateus">Mateus</option>
                        <option value="Marcos">marcos</option>
                        <option value="Daniel">Daniel</option>
                        <option value="Pedro">Pedro</option>
                    </select>
                </div>
                <div class="col-md-3 form-group">
                    CPF do Advogado:<br> <input type="text" name="CPF do Advogado" size="11">
                </div>
                <div class="col-md-3 form-group">
                    OAB do Advogado (UF.Número):<br> <input type="text" name="OAB do Advogado UF + Número" size="11">
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <input type="submit" name="form_btn_cadastrar" value="Cadastrar" class="btn btn-success">
                </div>
            </div>
    </div>







    </form>

    </div>

    <script src="bootstrap-4.1.3-dist/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap-4.1.3-dist/popper.min.js"></script>
</body>

</html>