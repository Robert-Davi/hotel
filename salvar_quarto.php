<?php

require_once "conexao.php";

$id_hotel = $_POST['id_hotel'];
$numero_quarto = $_POST['numero_quarto'];
$tipo_quarto = $_POST['tipo_quarto'];
$preco = $_POST['preco'];

$sql = "INSERT INTO quartos (hotel_id, numero_quarto, tipo, prec_diaria) VALUES ('$id_hotel', '$numero_quarto', '$tipo_quarto', '$preco', 1)";

if(mysqli_query($conexao, $sql)){
    echo "<h2> Quarto cadastrado" </h2>;
    <a href="cadastrar_quarto.html">Cadastrar outro quarto</a>
    <a href="logout_hotel.html">Sair do sistema</a>
}else{
    echo "Erro de cadastro";
    <a href="cadastrar_quarto.html"></a>
}

?>