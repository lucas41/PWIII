<?php

class Circulo extends FormaGeometrica
{

    public function calcularArea($lado) // tanto quadrado quanto circulo possuem a mesma function calculaArea e ambas irão receber a mesma assinatura no caso a variavel $lado porem se comportando de forma diferente durante o calculo fazendo o polimorfismo
    {
        echo ("A área do círculo é " . (($lado * $lado) * 3.14) . "<br>"); // calcula a area do circulo
    }
}

?>