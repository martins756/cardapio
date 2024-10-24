
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprovante de Pedido - Lanches da Ana</title>
    <link rel="stylesheet" href="cardapio.css">
</head>
<body>
    <h2>Comprovante de Pedido - Lanches da Ana</h2>

<?php
$quantidade1 = $_POST["quantidade1"]; //X-Burguer
$quantidade2 = $_POST["quantidade2"]; //X-Bacon
$quantidade3 = $_POST["quantidade3"]; //X-Salada
$quantidade4 = $_POST["quantidade4"]; //X-Coca-Cola
$quantidade5 = $_POST["quantidade5"]; //X-Sprite
$quantidade6 = $_POST["quantidade6"]; //X-Fanta
$obs = $_POST["obs"];
$valorTotal = 0.00;

if(isset($_POST["opcao1"])){
    $valorTotal = 8.30 * $quantidade1; //X-Burguer
}

if(isset($_POST["opcao2"])){
    $valorTotal = 28.90 * $quantidade2; //X-Burguer
}

if(isset($_POST["opcao3"])){
    $valorTotal = 20.50 * $quantidade3; //X-Burguer
}

if(isset($_POST["opcao4"])){
    $valorTotal = 10.00 * $quantidade4; //X-Burguer
}

if(isset($_POST["opcao5"])){
    $valorTotal = 9.90 * $quantidade5; //X-Burguer
}

if(isset($_POST["opcao6"])){
    $valorTotal = 6.50 * $quantidade6; //X-Burguer
}

 // Exibindo valor total
 echo "Pedido realizado com sucesso! <br>";
 echo "Sua conta ficou em R$: ", $valorTotal;
 echo "<br> Obs:", $obs; 
 echo "<br><a href='cardapio.html'>Voltar</a>";
 ?>
