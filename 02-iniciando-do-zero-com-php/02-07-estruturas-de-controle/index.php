<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.07 - Estruturas de controle");

/*
 * [ if ] https://php.net/manual/pt_BR/control-structures.if.php
 * [ elseif ] https://php.net/manual/pt_BR/control-structures.elseif.php
 * [ else ] https://php.net/manual/pt_BR/control-structures.else.php
 */
fullStackPHPClassSession("if, elseif, else", __LINE__);

$test = true;

if($test){
    var_dump(true);
}else{
    var_dump(false);
}

$age = 34;

if($age < 20){
    var_dump("Bandas coloridas");
}elseif($age > 20 && $age < 50){
    var_dump("ótimas bandas");
}else{
    var_dump("rock and roll raiz!");
}

$hour = 3;

if($hour >= 5 && $hour < 23){
    if($hour < 7){
        var_dump("Bob Marley");
    }else{
        var_dump("After Bridge");
    }
}else{
    var_dump("ZzzzZZZZZzzz");
}

/*
 * [ isset ] https://php.net/manual/pt_BR/function.isset.php
 * [ empty] https://php.net/manual/pt_BR/function.empty.php
 */
fullStackPHPClassSession("isset, empty, !", __LINE__);

$rock = "";

if(isset($rock)){
    var_dump("Rock And Roll");
}else{
    var_dump("Die");
}

$rockAndRoll = "AC/DC";

if(!empty($rockAndRoll)){
    var_dump("Rock existe e toca");
}else{
    var_dump("Não existe ou não está tocando");
}

/*
 * [ switch ] https://secure.php.net/manual/pt_BR/control-structures.switch.php
 */
fullStackPHPClassSession("switch", __LINE__);

$testCase = 'completed';

switch($testCase){
    case "billet_printed":
        var_dump("boleto impresso");
        break;
    case "canceled":
        var_dump("pagamento cancelado");
        break;
    case "past_due":
    case "pending":
        var_dump("aguardando pagamento");
        break;
    case "aproved":
    case "completed":
        var_dump("pagamento aprovado!");
        break;
    default:
        var_dump("erro ao processar pagamento");
        break;
};
