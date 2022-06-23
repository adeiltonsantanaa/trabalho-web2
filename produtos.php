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

$produtos = array (
    array(1,"Lapis",3),
    array(2,"caderno",2),
    array(3,"caneta",5),
    array(4,"borracha",8),
    array(5,"apagador",1),
    array(6,"apontador",34),
    array(7,"canetão",9),
    array(8,"cola",31)
  );
  shuffle($produtos);
?>
    <?php
        if ($_POST['nome'] != null) {
            echo "<div class='divForm'>";
            echo "<h1 class='nomeH1'>Bem vindo, ". $_POST['nome'] ."<br>Idade: " . $_POST['idade'] ."<br>Qtd Prod: ".$_POST['qtdProd']."<br>E-mail: ".$_POST['email']." </h1>";
            echo "</div>";
        } else {
            echo "";
        }
    ?>
    <?php
    echo "<div class='divPhp'>";
    echo "<table class='tablePhp'>";
        echo "<h1>Listagem de Produtos</h1>";
        echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>Produto</th>";
        echo "<th>quantidade</th>";
        echo "</tr>";
        for($i = 0; $i < $_POST['qtdProd']; $i++) {
                echo "<tr>";
                echo "<td>".$produtos[$i][0]."</td>";
                echo "<td>".$produtos[$i][1]."</td>";
                echo "<td>".$produtos[$i][2]."</td>";
                echo "</tr>";
        }   
    echo "</table>";
    echo "</div>";
    ?>

</body>
</html>