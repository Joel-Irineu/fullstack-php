<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.07 - Manipulação de arquivos");

/*
 * [ verificação de arquivos ] file_exists | is_file | is_dir
 */
fullStackPHPClassSession("verificação", __LINE__);

$file = __DIR__ . "/file.txt";

if(file_exists($file) && is_file($file)){
    echo "<p>Existe!</p>";
}else{
    echo "<p>NÃO Existe!</p>";
}

/*
 * [ leitura e gravação ] fopen | fwrite | fclose | file
 */
fullStackPHPClassSession("leitura e gravação", __LINE__);

if(!file_exists($file) || !is_file($file)){
    $fileOpen = fopen($file, "w");
    fwrite($fileOpen, "linha 01".PHP_EOL);
    fwrite($fileOpen, "linha 02".PHP_EOL);
    fwrite($fileOpen, "linha 03".PHP_EOL);
    fwrite($fileOpen, "Lorem Ipsum is simply dummy text of the printing and typesetting industry.".PHP_EOL);
    fclose($fileOpen);
}else{
    var_dump(
        file($file),
        pathinfo($file)
    );
}

echo "<p>".file($file)[3]."</p>";

$open = fopen($file, "r");
while(!feof($open)){
    echo "<p>".fgets($open)."</p>";
}

fclose($open);

/*
 * [ get, put content ] file_get_contents | file_put_contents
 */
fullStackPHPClassSession("get, put content", __LINE__);

$getContents = __DIR__ . "/teste2.txt";

if(file_exists($getContents) && is_file($getContents)){
    echo file_get_contents($getContents);
}else{
    $data = "<article><h1>Robson</h1><p>CEO UpInside <br> cursos@upinside.com.br</p></article>";
    file_put_contents($getContents, $data);
    echo file_get_contents($getContents);
}

// unlink($getContents);
// unlink($file);

if(file_exists(__DIR__."/test3.html") && is_file(__DIR__."/test3.html")){
    unlink(__DIR__."/test3.html");
}