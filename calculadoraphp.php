<?php

// calculadora php

// soma
function soma($n1, $n2){
    return $n1+$n2;
}

// subtração
function subtracao($n1, $n2){
    return $n1-$n2;
}

// multiplicação
function multiplicacao($n1, $n2){
    return $n1*$n2;
}

// divisão
function divisao($n1, $n2){
    if($n2!=0){
        return $n1/$n2;
    }else{
        return "0 não pode ser divisor.";
    }
    
}
// main 


$resp=1;
while( $resp != 0){
    echo("\n1 - Soma\n2 - Subtração\n3 - Multiplicação\n4 - Divisão\n0 - Sair\n");
    $resp = (int)readline("| entre com uma opção: ");
    if ($resp == 0)
        break;
    
    $n1 = (float)readline("n1: ");
    $n2 = (float)readline("n2: ");
    echo("resultado: ");

    switch($resp){
        case 1:
            echo(soma($n1, $n2));
            break;
        case 2:
            echo(subtracao($n1, $n2));
            break;
        case 3:
            echo(multiplicacao($n1, $n2));
            break;
        case 4:
            echo(divisao($n1, $n2));
            break;
    }
}