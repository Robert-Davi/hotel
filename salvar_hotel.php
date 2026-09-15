<?php

require_once "conexao.php";

$nome_hotel = $_POST['nome_hotel'];
$cidade = $_POST['cidade'];
$estrelas = $_POST['estrelas'];

$sql = "INSERT INTO hoteis (nome,cidade,estrelas) VALUES ('$nome_hotel', '$cidade', '$estrelas')";



if(mysqli_query($conexao, $sql)){

}
else{
    
}




?>