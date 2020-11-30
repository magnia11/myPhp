<?php

function sum($a, $b){
    return $a + $b;
}
echo sum(3,5)." ";

function sub($a, $b){
    return $a - $b;
}
echo sub(10,2)." ";

function mult($a, $b){
    return $a * $b;
}
echo mult(7,8)." ";

function div($a, $b){
    return $a / $b;
}
echo div(12,6)." ";


$operation = ["sum","sub","mult","div"];

function mathOperation($a, $b, $operation) {
   switch ($operation) {
       case "sum" :
           echo $a + $b;
           break;
           
           case "sub" :
           echo $a - $b;
           break;
           
           case "mult" :
           echo $a * $b;
           break;
           
           case "div" :
           echo $a / $b;
           break;
   }
}
echo mathOperation(12,2,"div");
