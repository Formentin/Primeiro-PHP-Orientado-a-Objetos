<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" placeholder="Name product" name="product">
        <input type="number" placeholder="Value" name="value-product">
        <input type="submit" value="add Item">
    </form>
</body>
</html>

<?php
require_once "Produto.php";
require_once "Itens.php";
require_once "Pedido.php";
require_once "IDesconto.php";
require_once "BlackFralde.php";
require_once "PromocaoNatal.php";
require_once "CalcularDesconto.php";

$name_item = $_POST["product"];
$value_item = $_POST["value-product"];

$pedido1 = new Pedido(3);

$pedido1->addItem(new Itens(1, new Produto($name_item, $value_item)));


$blackFralde = new BlackFralde("Promoção do dia da BlackFralde", 30);
$natal = new PromocaoNatal("Promoção de Natal", 20);
$calcularDesconto = new CalcularDesconto();



$pedido1->showAllItens();

echo "total: R$" . $pedido1->calcularTotal();
echo "<br>Total: com Desconto de Natal:" . $calcularDesconto->CalcularDesconto($natal, $pedido1);
echo "<br>Total: com Desconto de Natal:" . $calcularDesconto->CalcularDesconto($blackFralde, $pedido1);