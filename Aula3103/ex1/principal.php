<?php


include("cliente.php");
include("ContaEspecial.php");


$cliente = new conta(1);
echo "<br>";
$cliente->depositar(3000);
echo "<br>";
$cliente->saldo();
echo "<br>";
$cliente->sacar(200);
echo "<br>";
$cliente->extrato();
echo "<br>";
$cliente->aplicar(50);
echo "<br>";
$cliente->aplicado();
echo "<br>";
$cliente->extrato();
echo "<br>";
$cliente->resgatar(100);
echo "<br>";
$cliente->resgatar(50);
echo "<br>";
$cliente->extrato();
echo "<br>";
$cliente->resgatetotal();
echo "<br>";
$cliente->extrato();
echo "<br>";
$cliente->sacar(100);
echo "<br>";
$cliente->extrato();
echo "<br>";

$teste = new ContaEspecial(2);
$teste->depositar(50);
$teste->bonus(50);
$teste->saldo();


?>