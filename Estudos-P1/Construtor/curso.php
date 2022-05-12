<?php

include('professor.php'); // inclui nosso arquivo 

class curso extends professor {

    public $nomeCurso;
    
    function __construct($nomeCurso, $nomeProfessor, $registro)
    {
        $this->nomeCurso = $nomeCurso;
        $this->nomeProfessor = $nomeProfessor;
        $this->registro = $registro;
    }


    function imprimir(){

        echo 'A diciplina de '. $this->nomeCurso . ' é mestrada pelo professor '. $this->nomeProfessor. ' Portador da matricula '. $this->registro;
        
        }

}






?>