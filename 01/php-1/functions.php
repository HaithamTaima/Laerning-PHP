<?php
function fff ($name,$greeting = 'Hello' ){
    $name ='Laravel';
return $greeting.$name;
}

function sum ($x,$y,...$numpers){
    return $x +$y+ array_sum($numpers);
}

$name ='php';
$reselt = fff('php');

echo $reselt ."\n";

echo $name ."\n";

echo  sum(567,567,67567,56756,567567);