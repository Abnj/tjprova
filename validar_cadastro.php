<?php






session_start();
require_once('conexao.php');



if (isset($_POST['form_btn_cadastrar'])) {

    $nome_judicial = isset($_POST['num_conta_judicial']) ? $_POST['num_conta_judicial'] : "";
    $processo = isset($_POST['num_processo']) ? $_POST['num_processo'] : "";

    $data_validade = isset($_POST['data_validade']) ? $_POST['data_validade'] : "";
    $obs = isset($_POST['observacao']) ? $_POST['seobservacaonha'] : "";
    // natureza do sacador
    $natureza_sacador = isset($_POST['naturezadosacador']) ? $_POST['naturezadosacador'] : "";


    //Limpando o codigo
    $nome_judicial = filter_var($nome_judicial, FILTER_SANITIZE_NUMBER_INT);
    $processo = filter_var($processo, FILTER_SANITIZE_NUMBER_INT);
    $obs = filter_var($obs, FILTER_SANITIZE_EMAIL);

    echo  $nome_judicial;
    echo "<br>" . $processo;
    echo  "<br>" . $data_validade;
    echo "<br>" . $obs;
    echo "<br>" . $natureza_sacador;



    $con = new Conexao();
    $link = $con->conecta();
}
