<?php

// $matrizes1_linha = intval(1, 2);
// $matrizes1_coluna = intval(4, 5);
// $matrizes2_linha = intval(1, 2);
// $matrizes2_coluna = intval(4, 5);

// #echo $matrizes1_linha;

// $resultado = ($matrizes1_linha * $matrizes2_linha);
// var_dump($resultado);


// $matriz1 = $matriz1_linha * $matriz2_linha;
// foreach ($matriz1 as $resultado) {
//     #$resultado = $resultado * 2;
//     var_dump($resultado);
// }


$m1l1 = array(1, 2);
$m2c1 = array(1, 3);
$m1l2 = array(3, 4);
$m2c2 = array(2, 4);

// for($i = count($m1l1); $i > 0; $i--){
//     for($i = count($m2c1); $i > 0; $i--){
//         $conta = (count($m1l1) * count($m2c1));
//         var_dump($conta);
//     }
// }

$resultado1 = array_map(function($m1l1, $m2c1) {
    return $m1l1 * $m2c1;
}, $m1l1, $m2c1);

$resultado2 = array_map(function($m1l2, $m2c1) {
    return $m1l2 * $m2c1;
}, $m1l2, $m2c1);

$resultado3 = array_map(function($m1l1, $m2c2) {
    return $m1l1 * $m2c2;
}, $m1l1, $m2c2);

$resultado4 = array_map(function($m1l2, $m2c2) {
    return $m1l2 * $m2c2;
}, $m1l2, $m2c2);



print_r($conta);

// for ($i = count($matriz1); $i > 0; $i--) {
//     for ($j = count($matriz2); $j > 0; $j--) {
//         $resultado = $i * $j;
//         var_dump($resultado);
//     }
    
// }


/*
1 2     1 2
3 4     3 4

1*1 + 2*3   1*2 + 2*4
3*1 + 4*3   3*2 + 4*4

1 + 6       2 + 8
3 + 12      6 +16

*/
#var_dump($matriz1);