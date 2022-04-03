<?php 


class conta{


private $numero;
public  $saldo;
private $valoraplicado;


function __construct($nconta)
{
    $this->numero = $nconta;
    $this->saldo = 0;
    $this->valoraplicado = 0;

}


public function saldo(){
 echo $this->saldo;
}

public function aplicado(){
    echo $this->valoraplicado;
}

public function sacar($valor){
    if($this->saldo >= $valor){
        echo "Saldo atualizado com sucesso <br>";
        $this->saldo = $this->saldo - $valor;
    }else{
        echo "Saldo insuficiente <br>";
    }
}

public function depositar($val){
    echo "valor depositado com sucesso <br>";
    $this->saldo = $this->saldo + $val;
}

public function aplicar($valo){
    if($this->saldo >= $valo){
        $this->valoraplicado = ($this->valoraplicado + $valo);
        $this->valoraplicado = ($this->valoraplicado + ($this->valoraplicado * 0.05));
        $this->saldo = $this->saldo - $valo;
    }else{
        echo "saldo insuficiente <br>";
        }
}

public function resgatar($valores){
    if($this->valoraplicado >= $valores){
        $this->valoraplicado = $this->valoraplicado - $valores;
        $this->saldo = $this->saldo + $valores;

    }else{
        echo "valor aplicado insuficiente para regate <br>";

    }

}

public function resgatetotal(){
    $temp = $this->valoraplicado;
    $this->saldo = $this->saldo + $temp;
    $this->valoraplicado = 0;
    echo "Sucesso <br>";
    
}
    
public function extrato(){
    echo "O saldo disponivel é  = ".$this->saldo. "<br>";
    echo "O valor investido é = ". $this->valoraplicado. "<br>";


    $lucro = $this->saldo * 0.5;

    if($this->saldo >= 0){
        echo "caso seu valor fosse investido totalmente seu lucro seria de ". $lucro. "<br>";
    }
}





}



?>