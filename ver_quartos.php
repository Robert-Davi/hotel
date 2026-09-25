<?php
require_once 'conexao.php';
$id_hotel = $_GET['id_hotel'];

$sql = "SELECT * FROM quartos WHERE hotel_id = '$id_hotel' and disponivel = 1";
$resultado = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF_8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quartos Disponíveis</title>
    </head>
    <body>
        <h2>Quartos Disponíveis no hotel selecionado</h2>
        <table>
            <tr>
                <th>Número</th>
                <th>Tipo</th>
                <th>Preço</th>
            </tr>
        <?php while($quartos = mysqli_fetch_assoc($resultado)) {
            echo 
            "<tr>
                <td>".$quarto['numero']"</td>
                <td>".$quarto['tipo']"</td>
                <td>".$quarto['preco_diaria']"</td>
            </tr>"
        }
        ?>
        </table>

        <h2>Preecha para reservar um quarto</h2>
        <form action="salvar_reserva.php" method="post">
            <label for="id_cliente">ID do Cliente</label>
            <input type="number" id="id_cliente" name="id_cliente">

            <label for="id_quarto">ID do Quarto</label>
            <input type="number" id="id_quarto" name="id_quarto">

            <label for="data_entrada">Data Entrada</label>
            <input type="date" id="data_entrada" name="data_entrada">

            <label for="data_saida">Data Saída</label>
            <input type="date" id="data_saida" name="data_saida">

            <button type="submit">Reservar</button>
        </form>
    </body>
</html>