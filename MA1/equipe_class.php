<?php

class equipe{

    public $nome;
    public $idade;
    public $email;
    public $descricao;


    function __construct($nome, $idade, $email, $descricao)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->email = $email;
        $this->descricao = $descricao;
    }



    public function imprimir(){
        echo $this->nome;
        echo $this->idade;
        echo $this->email;
    }
    
}

?>