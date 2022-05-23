<?php

//Juntar pares de forma correcta Actividad 4

function solution($s){
    if(strlen($s) == 2){ //cadena de 2 que cumple las condiciones
        return 1;
    }

    $paresCorrectos = 0;
    $contadorIzquierdo = 0;
    $contadorDerecho = 0;

    $StringArray = str_split($s); //dividir el string a array

    foreach($StringArray as $shoe){

        //contar cantidad de izquierdo con derecho
        if($shoe == "L"){
            $contadorIzquierdo += 1;
        }else{
            $contadorDerecho += 1;
        }

        //cantidad de veces iguales
        if($contadorIzquierdo == $contadorDerecho){
            $paresCorrectos += 1;
        }
    }

    return $paresCorrectos;
}

//$S = "RLLLRRRLLR"; // 4
$S = "LLRLRLRLRLRLRR"; //1
//$S = "RLRRLLRLRRLL"; //4
echo "Pares correctos: ".solution($S);

?>