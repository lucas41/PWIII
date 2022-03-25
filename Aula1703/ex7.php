<?php

$livro = "um titulo";
$tipo = "professor";

if($tipo === "professor"){
    echo "*** Recibo Professor *** <br/>";
    echo "livro ", $livro ," <br/>";
    echo "Devolver em 10 dias <br/>";
}
else if($tipo === "aluno"){
    echo "*** Recibo Aluno ***<br/>";
    echo "livro: ", $livro ,"<br/>";
    echo "Devolver em 3 dias<br/>";
}else{
    echo "usuario não cadastrado";
}


?>