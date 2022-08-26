<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.03 - Funções para arrays");

/*
 * [ criação ] https://php.net/manual/pt_BR/ref.array.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$index = [
    "AC/DC",
    "Nirvana",
    "Alter Bridge"
];

$assoc = [
    "band_1" => "AC/DC",
    "band_2" => "Nirvana",
    "band_3" => "Alter Bridge"
];
// Adiciona no inicio
array_unshift($index, "", "Pearl Jam");
$assoc = ["band_4" => "Pearl Jam", "band_5" => ""] + $assoc;
// Adiciona no final
array_push($index, "");
$assoc = $assoc + ["band_6" => ""];
// Remove o primeiro valor
array_shift($index);
array_shift($assoc);
// Remove o ultimo valor
array_pop($index);
array_pop($assoc);
// Eliminar 
array_unshift($index, "");

$index = array_filter($index);
$assoc = array_filter($assoc);

var_dump(
    $index,
    $assoc
);

/*
 * [ ordenação ] reverse | asort | ksort | sort
 */
fullStackPHPClassSession("ordenação", __LINE__);

// reverso
$index = array_reverse($index);
$assoc = array_reverse($assoc);
// Ordernar pelo valor
asort($index);
asort($assoc);
// Ordenar pelo indice
ksort($index);
// Reordena
krsort($index);
// reindexa
sort($index);
// reindexa e reordena
rsort($index);

var_dump(
    $index,
    $assoc
);

/*
 * [ verificação ]  keys | values | in | explode
 */
fullStackPHPClassSession("verificação", __LINE__);

var_dump([
    array_keys($assoc),
    array_values($assoc)
]);
// Verificar se existe no array
if(in_array("AC/DC", $assoc)){
    echo "<p>Cause I'm back!</p>";
}
// Tornar em uma string
$arrToString = implode(", ", $assoc);
echo "<p>Eu curto {$arrToString} e muitas outras!</p>";
echo "<p>{$arrToString}</p>";

// Tornar em array
var_dump(explode(", ", $arrToString));

/**
 * [ exemplo prático ] um template view | implode
 */
fullStackPHPClassSession("exemplo prático", __LINE__);

$profile = [
    "name" => "Irineu",
    "company" => "arco",
    "mail" => "irineu.joel01@gmail.com"
];

$template = <<<TPL
    <article>
        <h1>{{ name }}</h1>
        <p>
            {{ company }} <br>
            <a href="mailto:{{ mail }}" title="Enviar e-mail para {{ name }}">
                Enviar E-mail
            </a>
        </p>
    </article>
TPL;

echo $template;

echo str_replace(
    array_keys($profile), array_values($profile), $template
);

$replaces = "{{ ".implode(" }}&&{{ ", array_keys($profile))." }}";
echo $replaces;

// var_dump(explode("&", $replaces));

echo str_replace(
    explode("&", $replaces),
    array_values($profile),
    $template
);
