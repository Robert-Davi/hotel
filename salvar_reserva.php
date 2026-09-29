<?php

require_once "conexao.php";

$id_cliente = $_POST['id_cliente'];
$id_quarto = $_POST['id_quarto'];
$data_entrada = $_POST['data_entrada'];
$data_saida= $_POST['data_saida'];

$sql = "INSERT INTO reservas (id_cliente, id_quarto, data_entrada, data_saida) VALUES ('$id_cliente', '$id_quarto', '$data_entrada', '$data_saida', 100)";

if(mysqli_query($conexao, $sql)){
    echo "Sucesso";
}else{
    echo "Erro";
    <a href="ver_quarto.php">Procure quarto novamente</a>
}

?>