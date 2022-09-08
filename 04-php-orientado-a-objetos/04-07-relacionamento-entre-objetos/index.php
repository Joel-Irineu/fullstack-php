<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.07 - Relacionamento entre objetos");

require __DIR__ . "/source/autoload.php";

/*
 * [ associacão ] É a associação mais comum entre objetos onde o objeto terá um atributo
 * apontando e dando acesso ao outro objeto
 */
fullStackPHPClassSession("associacão", __LINE__);

$company = new Source\Related\Company();
$company->bootCompany("Upinside", "Nome da rua");

echo "<pre>"; var_dump($company); echo "</pre>";

$address = new \Source\Related\Address("Nome da rua", 125, "Bloco A sala 208");

$company->boot("upinside", $address);

echo "<pre>"; var_dump($company); echo "</pre>";

echo "<p>A {$company->getCompany()} tem sede na rua {$company->getAddress()->getStreet()}</p>";

/*
 * [ agregação ] Em agregação tornamos um objeto externo parte do objeto base, contudo não
 * o referenciamos em uma propriedade como na associação.
 */
fullStackPHPClassSession("agregação", __LINE__);

$mouse = new \Source\Related\Product("Mouse", 35);
$monitor = new \Source\Related\Product("Monitor", 1200);

echo "<pre>"; var_dump($mouse, $monitor); echo "</pre>";

$company->addProduct($mouse);
$company->addProduct($monitor);
$company->addProduct(new \Source\Related\Product("teclado", 150));

echo "<pre>"; var_dump($company); echo "</pre>";

foreach($company->getProducts() as $product){
    echo "<p>{$product->getName()} por R$ {$product->getPrice()}</p>";
}

/*
 * [ composição ] Em composição temos um objeto base que é responsável por instanciar o
 * objeto parte, que só existe enquanto o base existir.
 */
fullStackPHPClassSession("composição", __LINE__);

$company->addTeamMember("Dev", "Joel", "Irineu");
$company->addTeamMember("Dev", "João", "Gabriel");
$company->addTeamMember("Dev", "Matheus", "Vasconselos");
$company->addTeamMember("Sup", "Gabriel", "Cansado");

echo "<pre>";
    var_dump($company);
echo "</pre>";

foreach($company->getTeam() as $member){
    echo "<p>{$member->getJob()}: {$member->getFirtsName()} {$member->getLastName()}</p>";
}
