<?php

    include_once('abstractFormas.php');

    class quadrado extends formaGeometrica { // quadrado herda formaGeometrica e precisa implmentar a função calculaArea

    public function calcularArea($lado){ // tanto quadrado quanto circulo possuem a mesma function calculaArea e ambas irão receber a mesma assinatura no caso a variavel $lado porem se comportando de forma diferente durante o calculo fazendo o polimorfismo
    echo("A área do quadrado é ". ($lado*$lado)."<br>"); // calcula a area do quadrado 

    }

}
