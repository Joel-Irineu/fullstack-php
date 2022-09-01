<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.10 - Requisição de arquivos");

/*
 * [ include ] https://php.net/manual/pt_BR/function.include.php
 * [ include_once ] https://php.net/manual/pt_BR/function.include-once.php
 */
fullStackPHPClassSession("include, include_once", __LINE__);

// include "file.php";
// include "header.php";
include __DIR__."/header.php";

$profile = new StdClass();

$profile->name = "irineu";
$profile->company = "innovate";
$profile->email = "irineu@innovate.com";

// var_dump($profile);

include __DIR__."/profile.php";

$profile = new StdClass();

$profile->name = "vasco";
$profile->company = "innovate";
$profile->email = "vasco@innovate.com";
include __DIR__."/profile.php";



/*
 * [ require ] https://php.net/manual/pt_BR/function.require.php
 * [ require_once ] https://php.net/manual/pt_BR/function.require-once.php
 */
fullStackPHPClassSession("require, require_once", __LINE__);

// require "file.php";
require __DIR__."/config.php";

echo "<h1>".COURSE."</h1>";
