<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.06 - Arrays, vetores e pilhas");

/**
 * [ arrays ] https://php.net/manual/pt_BR/language.types.array.php
 */
fullStackPHPClassSession("index array", __LINE__);

$arra = array(1,2,3);
$arra = [0,1,2,3];

var_dump($arra);

$arrayIndex = [
    "Joel",
    "Vasco",
    "Gabriel"
];

$arrayIndex[] = "João";
$arrayIndex[] = "Pedro";

var_dump($arrayIndex);

/**
 * [ associative array ] "key" => "value"
 */
fullStackPHPClassSession("associative array", __LINE__);

$arrayAssoc = [
    "dev1" => "Irineu",
    "dev2" => "João",
    "dev3" => "Vasco"
];

$arrayAssoc["Infra"] = "Gabriel";

var_dump($arrayAssoc);

/**
 * [ multidimensional array ] "key" => ["key" => "value"]
 */
fullStackPHPClassSession("multidimensional array", __LINE__);

$brian = ["Brian", "Mic"];
$angus = ["name" => "Angus", "instrument" => "Guitar"];
$instruments = [
    "brian" => $brian,
    "angus" => $angus
];

var_dump($instruments);

/**
 * [ array access ] foreach(array as item) || foreach(array as key => value)
 */
fullStackPHPClassSession("array access", __LINE__);

$tic = [
    "dev1" => "Irineu",
    "dev2" => "João",
    "lpCreator" => "Vasco",
    "infra" => "Gabriel"
];

echo "<p>o infra de tic é {$tic["infra"]}</p>";

$mkt = [
    "gestora" => "Daysiane",
    "designer" => "Ednes",
    "ux" => "Livia",
    "rosto" => "Savio"
];

$setores = [
    "tic" => $tic,
    "mkt" => $mkt
];

var_dump($setores);

echo "<p>{$setores["tic"]["infra"]}</p>";

foreach($tic as $func){
    echo "<p>{$func}</p>";
}

foreach($tic as $key => $value){
    echo "<p>{$value} é {$key}</p>";
}

foreach($tic as $func){
    var_dump($func);
}
