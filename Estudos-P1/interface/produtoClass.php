<?php
 include('Iestoque.php');

class Produto implements Iestoque { // precisamos implementar o metodo imprimir dentro da classe produto por herdar de Iestoque

   

    public $quantidade;
    public $local;

    function __construct($quantidade, $local)
    {
        $this->quantidade = $quantidade;
        $this->local = $local;
    }


    public function imprimir()
    {
        echo 'a quantidade é de '. $this->quantidade . ' e o local é '. $this->local;
    }
}
