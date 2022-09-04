<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.03 - Qualificação e encapsulamento");

/*
 * [ namespaces ] http://php.net/manual/pt_BR/language.namespaces.basics.php
 */
fullStackPHPClassSession("namespaces", __LINE__);

require __DIR__."/Classes/App/Template.php";
require __DIR__."/Classes/Web/Template.php";


$appTemplate = new App\Template();
$webTemplate = new Web\Template();

var_dump([
    $appTemplate,
    $webTemplate
]);

use App\Template;
use Web\Template AS WebTemplate;

$appUseTemplate = new Template();
$webUseTemplate = new WebTemplate();

var_dump([
    $appTemplate,
    $webUseTemplate
]);

/*
 * [ visibilidade ] http://php.net/manual/pt_BR/language.oop5.visibility.php
 */
fullStackPHPClassSession("visibilidade", __LINE__);

require __DIR__."/source/Qualifield/User.php";

$user = new Source\Qualifield\User();

// $user->firstName = 'Joel';
// $user->lastName = 'irineu';

// $user->setFirstName('Joel');
// $user->setLastName('irineu');

var_dump(
    $user,
    get_class_methods($user)
);

echo "<p>O email de {$user->getFirstName()} é {$user->getEmail()}</p>";

/*
 * [ manipulação ] Classes com estruturas que abstraem a rotina de manipulação de objetos
 */
fullStackPHPClassSession("manipulação", __LINE__);

$joel = $user->setUser(
    "joel",
    "irineu",
    "irineu.joel01@gamil.com"
);

if(!$joel){
    echo "<p class='trigger error'>{$user->getError()}</p>";
}

$vasco = new \Source\Qualifield\User();
$vasco->setUser(
    "Matheus",
    "Vasconcelos",
    "matheus.vasconcelos.roch@gmail.com"
);

$jao = new \Source\Qualifield\User();
$jao->setUser(
    "João",
    "Gabriel",
    "joao.gabriel@gmail.com"
);


var_dump([
    $user,
    $vasco,
    $jao
]);
