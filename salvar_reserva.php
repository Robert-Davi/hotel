<?php

require_once "conexao.php";

$id_cliente = $_POST['id_cliente'];
$id_quarto = $_POST['id_quarto'];
$data_entrada = $_POST['data_entrada'];
$data_saida= $_POST['data_saida'];

$sql = "INSERT INTO reservas (id_cliente, id_quarto, data_entrada, data_saida) VALUES ('$id_cliente', '$id_quarto', '$data_entrada', '$data_saida')";
$resultado = mysqli_query($conexao, $sql);

if(mysqli_num_rows($resultado) > 0){
    echo "Sucesso";
    <a href="ver_reserva">Ver minhas reservas</a>
}else{
    echo "Erro";
    <a href="ver_quarto.php">Procure quarto novamente</a>
}

?>