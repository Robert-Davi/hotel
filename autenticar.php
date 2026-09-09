<?php
include 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM clientes WHERE senha = '$senha' AND email = '$email'";

$resultado = mysqli_query(
    $conexao,
    $sql
);

$cliente = mysqli_fetch_assoc($resultado)

if($cliente){
    echo "Login realizado com sucesso";
}else{
    echo "Email ou senha inválidos \n";
    echo "<a href='login.html'>Voltar<\a>";
}

?>