<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.05 - Interpretação e operações pt1");

require __DIR__ . "/source/autoload.php";

/*
 * [ construct ] Executado automaticamente por meio do operador new
 * http://php.net/manual/pt_BR/language.oop5.decon.php
 */
fullStackPHPClassSession("__construct", __LINE__);

// $user = new \Source\Interpretation\User();
$user = new \Source\Interpretation\User(
    "Joel",
    "irineu",
    "irineu.joel01@gmail.com"
);

var_dump($user);

/*
 * [ clone ] Executado automaticamente quando um novo objeto é criado a partir do operador clone.
 * http://php.net/manual/pt_BR/language.oop5.cloning.php
 */
fullStackPHPClassSession("__clone", __LINE__);

$vasco = $user;

$jao = $vasco;
$jao->setFirstName("João");
$jao->setLastName("Gabriel");

$vasco->setFirstName("Matehus");
$vasco->setLastName("Vasconcelos");

$jao = clone $vasco;

$jao->setFirstName("João");
$jao->setLastName("Gabriel");

$cansado = clone $jao;


var_dump(
    $vasco,
    $jao,
    $cansado
);

/*
 * [ destruct ] Executado automaticamente quando o objeto é finalizado
 * http://php.net/manual/pt_BR/language.oop5.decon.php
 */
fullStackPHPClassSession("__destruct", __LINE__);