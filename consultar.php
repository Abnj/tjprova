<?php
session_start();
require_once('conexao.php');

$nome = isset($_POST['sacador1']) ? $_POST['sacador1'] : "";



$con = new Conexao();
$link = $con->conecta();



$sql = "SELECT * FROM trt_abner WHERE nome_sacador = '$nome' ";

$re = mysqli_query($link, $sql);

if ($re) {
    $result = mysqli_fetch_assoc($re);
    $nome = $result['nome_sacador'];
    $cpf = $result['cpf'];
} else {
    echo "erro ao consultar";
}
