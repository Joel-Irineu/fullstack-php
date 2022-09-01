<?php

/*
 * [ functions ] https://php.net/manual/pt_BR/language.functions.php
 */
function functionName($arg1, $arg2, $arg3){
    $body = [$arg1, $arg2, $arg3];

    return $body;
}

function optionArgs($arg1, $arg2 = true, $arg3 = null){
    $body = [$arg1, $arg2, $arg3];

    return $body;
}

/*
 * [ global access ] global $var
 */
function calcImc(){
    global $weight;
    global $height;
    return $weight / ($height * $height);
}

/*
 * [ static arguments ] static $var
 */
function payTotal($price){
    static $total;
    $total += $price;

    return "<p>o total a pagar é R$".number_format($total, 2, ',', '.')."</p>";
}

/*
 * [ dinamic arguments ] get_args | num_args
 */
function myTeam(){
    $teamNames = func_get_args();
    $teamCount = func_num_args();

    return ["members" => $teamNames, "count" => $teamCount];
}