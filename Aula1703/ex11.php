<?php


$vetor1 = array(
    "numero1" => 1,
    "numero2" => 2,
    "numero3" => 3,
    "numero4" => 4,
    "numero5" => 5,
    "numero6" => 6,
    "numero7" => 7,
    "numero8" => 8,
    "numero9" => 9,
    "numero10" => 10,
);

$vetor2 = array(
    "numero11" => 1,
    "numero12" => 12,
    "numero13" => 3,
    "numero14" => 14,
    "numero15" => 5,
    "numero16" => 16,
    "numero17" => 7,
    "numero18" => 18,
    "numero19" => 9,
    "numero20" => 20,
);

$result = array_diff($vetor1, $vetor2);

print_r($result);



?>