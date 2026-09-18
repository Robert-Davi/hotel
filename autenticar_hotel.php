<?php

require_once "conexao.php";

$email_hotel = $_POST['email_hotel'];
$senha_hotel = $_POST['senha_hotel'];

$sql = "INSERT INTO hoteis WHERE '$email_hotel' AND '$senha_hotel'";
$resultado = mysqli_query($conexao, $sql);

if(mysqli_num_rows($resultado) > 0){
    header("Location: cadastrar_quarto.html");
    exit();
}else{
    echo "Seu e-mail e senha não existem";
    <a href="login_hotel.html"></a>
}

?>