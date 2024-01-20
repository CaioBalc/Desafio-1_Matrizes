<?php

# Matriz Quadrada:

# Define matrizes
$mq1l1 = array(1, 2);
$mq1l2 = array(3, 4);
$mq2c1 = array(1, 3);
$mq2c2 = array(2, 4);

#Multiplica as linhas com as colunas
$contaq1 = array_map(function($mq1l1, $mq2c1) {
    return $mq1l1 * $mq2c1;
}, $mq1l1, $mq2c1);

$contaq2 = array_map(function($mq1l2, $mq2c1) {
    return $mq1l2 * $mq2c1;
}, $mq1l2, $mq2c1);

$contaq3 = array_map(function($mq1l1, $mq2c2) {
    return $mq1l1 * $mq2c2;
}, $mq1l1, $mq2c2);

$contaq4 = array_map(function($mq1l2, $mq2c2) {
    return $mq1l2 * $mq2c2;
}, $mq1l2, $mq2c2);

#Soma os resultados
$resultadoq1 = array_sum($contaq1);
$resultadoq2 = array_sum($contaq2);
$resultadoq3 = array_sum($contaq3);
$resultadoq4 = array_sum($contaq4);

#Imprime os resultados
echo <<< EOL
    Matriz quadrada:
    $resultadoq1 | $resultadoq3
    $resultadoq2 | $resultadoq4

EOL;

#Conta de referência
/*
1 2     1 2
3 4     3 4

1*1 + 2*3   1*2 + 2*4
3*1 + 4*3   3*2 + 4*4

1 + 6       2 + 8
3 + 12      6 + 16

7   10
15  22
*/


#Matriz não quadrada:

# Define matrizes
$mnq1l1 = array(1, 2, 3);
$mnq1l2 = array(4, 5, 6);
$mnq2c1 = array(1, 3, 5);
$mnq2c2 = array(2, 4, 6);

#Multiplica as linhas com as colunas
$contanq1 = array_map(function($mnq1l1, $mnq2c1) {
    return $mnq1l1 * $mnq2c1;
}, $mnq1l1, $mnq2c1);

$contanq2 = array_map(function($mnq1l2, $mnq2c1) {
    return $mnq1l2 * $mnq2c1;
}, $mnq1l2, $mnq2c1);

$contanq3 = array_map(function($mnq1l1, $mnq2c2) {
    return $mnq1l1 * $mnq2c2;
}, $mnq1l1, $mnq2c2);

$contanq4 = array_map(function($mnq1l2, $mnq2c2) {
    return $mnq1l2 * $mnq2c2;
}, $mnq1l2, $mnq2c2);

#Soma os resultados
$resultadonq1 = array_sum($contanq1);
$resultadonq2 = array_sum($contanq2);
$resultadonq3 = array_sum($contanq3);
$resultadonq4 = array_sum($contanq4);

#Imprime os resultados
echo <<< EOL
    Matriz não quadrada:
    $resultadonq1 | $resultadonq3
    $resultadonq2 | $resultadonq4

EOL;

#Conta de referência
/*
1 2 3   1 2
4 5 6   3 4
        5 6

1*1 + 2*3 + 3*5     1*2 + 2*4 + 3*6
4*1 + 5*3 + 6*5     4*2 + 5*4 + 6*6

1 + 6 + 15       2 + 8 + 18
4 + 15 + 30      8 + 20 + 36

22  28
49  64
*/