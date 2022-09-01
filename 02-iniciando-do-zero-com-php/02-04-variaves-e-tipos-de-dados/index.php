<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);

$userFirstName = "Joel";
$userLastName = "Irineu";
echo "<h3>{$userFirstName} {$userLastName}</h3>";

$user_first_name = "Matheus";
$user_last_name = "Calebe";
echo "<h3>{$user_first_name} {$user_last_name}</h3>";

$userAge = 17;
echo "<h3>{$user_first_name} {$user_last_name} <span class='tag'>tem {$userAge}</span></h3>";

$userEmail = 'irineu.joel01@gmail.com';
echo '<p>{$userEmail}</p>';

$company = 'trocabyte';
$$company = 'service';

echo "<p>{$company} {$trocabyte}</p>";

$calcA = 10;
$calcB = 20;
// $calcB = $calcA;
$calcB = &$calcA;
$calcB = 50;

var_dump([
    "a" => $calcA,
    "b" => $calcB
]);

/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);

$true = true;
$false = false;
var_dump($true, $false);

$ofAge = ($userAge > 18);
var_dump($ofAge);

// Todos os valores abaixo são reconhecidos como false
$a = 0;
$b = 0.0;
$c = "";
$d = [];
$e = null;

var_dump($a, $b, $c, $d, $e);

if($a || $b || $c || $d || $e){
    var_dump(true);
}else{
    var_dump(false);
}
/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);

$code = "<article><h1>Um Call User Function!</h1> <p>teste</p></article>";

$codeClear = call_user_func("strip_tags", $code);

var_dump($code, $codeClear);

$codeMore = function($code){
    var_dump($code);
};
$codeMore(code: "#BoraProgramar!");

/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);

$string = "Olá, mundo";
$array = [$string];
$object = new stdClass();
$object->hello = $string;
$null = null;
$int = 1234;
$float = 1.234;

var_dump([
    $string,
    $array,
    $object,
    $null,
    $int,
    $float
]);