<?php

include('professor.php'); // inclui nosso arquivo de classe extendida 

class curso extends professor  { // Nossa classe curso ira extender os valores de professor desta forma os atributos de professor são vinculadas a um curso

    public $nomeCurso;
    



    function imprimir(){ // Imprime os valores atraves da propiedades $this

        echo 'A diciplina de '. $this->nomeCurso . ' é mestrada pelo professor '. $this->nomeProfessor. ' Portador da matricula '. $this->registro;
        
        }

}






?>