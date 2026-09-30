<?php
require_once "conexao.php";

$sql = "SELECT
    reservas.id,
    clientes.nome AS nome_cliente,
    clientes.telefone,
    quartos.numero_quarto,
    reservas.data_entrada,
    reservas.data_saida
FROM reservas
JOIN quartos ON reservas.id_quarto = quartos.id
JOIN hoteis ON reservas.id_cliente = clientes.id
WHERE quartos.id_hotel = '$id_hoteis'";

$resultado = mysqli_query($conexao, $sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quartos Reservas</title>
</head>
<body>
    <h2>Painel de Reservas dos Quartos</h2>
    <table>
        <tr>
            <th>Cód. Reservas</th>
            <th>Quarto</th>
            <th>Hóspede</th>
            <th>Telefone</th>
            <th>Data de Entrada</th>
            <th>Data de Saída</th>
        </tr>
        <?php
            while($linha = mysqli_fetch_assoc($resultado)){
                echo = "
                <tr>
                    <th>.$linha['id'].</th>
                    <th>.$linha['numero'].</th>
                    <th>.$linha['nome_cliente'].</th>
                    <th>.$linha['telefone'].</th>
                    <th>.$linha['data_entrada'].</th>
                    <th>.$linha['data_saida'].</th>
                </tr>
                ";
            }
        ?>
    </table>
    <a href="cadastrar_quartos.html">Clique aqui para cadastrar novos quartos</a>
    <br>
    <a href="logout.php">Clique aqui para sair do sistema</a>
</body>
</html>