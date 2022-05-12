<?php

//polimorfismo e quando temos functions iguais com mesma assinatura mas com comportamentos diferentes
// no exemplo abaixo iremos ter a mesma function calculaArea para quadrado e circulo
// ambas irão receber uma $lado porem cada uma ira calcular de forma diferente por isso ocorre o polimorfismo


include('abstractFormas.php');
include('quadrado.php');
include('circulo.php');

$quadrado = new quadrado();
$lado = 2;
$quadrado->calcularArea($lado);

$circulo = new circulo();
$raio = 2;
$circulo->calcularArea($raio);




?>