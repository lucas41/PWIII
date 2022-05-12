<?php


// Assim como no exercicio passado podemos fazer um construtor dessa forma não iremos conseguir passar mais os arquivos atraves de $matematica->nomecurso
// e sim passaremos esses valores ao iniciar um novo objeto
include('curso.php');


// Agora declaramos de forma unica e caso venhamos a esquecer será apresentado um erro um construtor ajuda muito a não esquecermos de instanciar algo
$matematica = new curso('matematica', 'lucas', 109308);

/*

Forma de declarar antiga

$matematica->nomeCurso = 'matematica';
$matematica->nomeProfessor = 'Lucas';
$matematica->registro = 109309;


*/

$matematica->imprimir();

echo '<br>';


$portugues = new curso('portugues', 'joao', 103924);
$portugues->imprimir();

?>