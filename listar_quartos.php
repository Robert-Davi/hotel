<?php

require_once "conexao.php";

$sql = "SELECT * FROM quartos;
$resultado = mysqli_query($conexao, $sql);

if(mysqli_num_rows($resultado) > 0){
    echo "Quarto cadastrado";
    <a href="cadastrar_quarto.html">Cadastrar outro quarto</a>
    <a href="logout_hotel.html">Sair do sistema</a>
}else{
    echo "Erro";
    <a href="cadastrar_quarto.html"></a>
}

?>