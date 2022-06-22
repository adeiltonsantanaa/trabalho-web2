<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo2.css">
    <title>Produtos</title>
</head>
<body>

<?php
error_reporting(E_ALL ^ E_WARNING);

$json_str = '{"produtos": '.
		'[{"id": 1, "produto": "lapis", "quantidade": 3},'.
		'{"id": 2, "produto": "caderno", "quantidade": 4},'.
        '{"id": 3, "produto": "caneta", "quantidade": 1},'.
        '{"id": 4, "produto": "borracha", "quantidade": 3},'.
        '{"id": 5, "produto": "apagador", "quantidade": 2},'.
		'{"id": 6, "produto": "apontador", "quantidade": 5}'.
		']}';

$jsonObj = json_decode($json_str);
$produtos = $jsonObj->produtos;
?>


    <?php
    if ($_POST['nome'] != null) {
    echo "<h1>Bem vindo, ". $_POST['nome']."</h1>";
} else {
    echo "";
}
    
    ?>
    <?php
    echo "<table>";
        echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>Produto</th>";
        echo "<th>quantidade</th>";
        echo "</tr>";
        foreach ( $produtos as $e) {
            echo "<tr>";
            echo "<td>$e->id</td>";
            echo "<td>$e->produto</td>";
            echo "<td>$e->quantidade</td>";
            echo "</tr>";
        }
    echo "</table>";
    ?>

<script src="teste.js"></script>
</body>
</html>