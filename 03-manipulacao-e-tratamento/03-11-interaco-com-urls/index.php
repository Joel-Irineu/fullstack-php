<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.11 - Interação com URLs");

/*
 * [ argumentos ] ?[&[&][&]]
 */
fullStackPHPClassSession("argumentos", __LINE__);

echo "<h1><a href='./'>Clear...</a></h1>";
echo "<p><a href='./index.php?arg1=true&arg2=true'>argumentos</a></p>";

$data = [
    "name" => "irineu",
    "age" => 21,
    "mail" => "irineu.joel01@gmail.com"
];

$object = (object)$data;

var_dump($object);

$arguments = http_build_query($data);

echo "<p><a href='./index.php?{$arguments}'>Args By, Array</a></p>";

var_dump($_GET);

/*
 * [ segurança ] get | strip | filters | validation
 * [ filter list ] https://php.net/manual/en/filter.filters.php
 */
fullStackPHPClassSession("segurança", __LINE__);

$dataFilter = http_build_query([
    "name" => "irineu",
    "age" => 21,
    "mail" => "irineu.joel01@gmail.com",
    "site" => "joelirineu.com.br",
    "tags" => "<p>Aqui vai um texto</p>"
]);

echo "<p><a href='./index.php?{$dataFilter}'>DataFilter</a></p>";

$dataUrl = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRIPPED);

if($dataUrl){
    if(in_array("", $dataUrl)){
        echo "<p class='trigger warning'>Faltam Dados!</p>";
    }elseif(empty($dataUrl['mail'])){
        echo "<p class='trigger warning'>Falta o e-mail!</p>";
    }elseif(!filter_var($dataUrl['mail'], FILTER_VALIDATE_EMAIL)){
        echo "<p class='trigger warning'>E-mail invalido!</p>";
    }else{
        echo "<p class='trigger accept'>Tudo ok!</p>";
    }
}else{
    var_dump(false);
}

var_dump($dataUrl);

$dataFilter = http_build_query([
    "name" => "irineu",
    "age" => 21,
    "mail" => "irineu.joel01@gmail",
    "site" => "https://joelirineu.com.br",
    "tags" => "<p>Aqui vai um texto</p>"
]);

parse_str($dataFilter, $arrDataFilter);
var_dump($arrDataFilter);

$dataPreFilter = [
    "name" => FILTER_SANITIZE_STRING,
    "age" => FILTER_SANITIZE_STRING,
    "mail" =>FILTER_VALIDATE_EMAIL,
    "site" => FILTER_VALIDATE_URL,
    "tags" => FILTER_SANITIZE_STRING
];

var_dump(filter_var_array($arrDataFilter, $dataPreFilter));
