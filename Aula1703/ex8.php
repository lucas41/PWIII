
<?php

$contador = 0;
$result = 0;

for($i=0; $i<20; $i++){
$num = rand(-100,100);
echo $num, "<br>";


if($num < 0){
    $contador = $contador + 1;
} else {
    $result = $result + $num;
}


}

echo "O resultado da soma dos positivos é ", $result, "<br>";
echo "O total de negativos é ", $contador;


?>


