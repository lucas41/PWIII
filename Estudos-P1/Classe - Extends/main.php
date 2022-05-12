<?php

// arquivo principal onde iremos declarar os atributos e chamar a função 

include('curso.php'); // inclui o arquivo de nossa classe Curso 

$matematica = new curso(); // instancia matematica como um novo curso 

$matematica->nomeCurso = 'matematica'; // atribui ao objeto nomecurso um valor no caso matematica
$matematica->nomeProfessor = 'Lucas'; // **
$matematica->registro = 109309; //** 

$matematica->imprimir(); // Chama a função imprimir declarada dentro da classe 

echo '<br>';


$portugues = new curso();
$portugues->nomeCurso = 'Portugues';
$portugues->nomeProfessor = 'João';
$portugues->registro = 983421;
$portugues->imprimir();

?>
