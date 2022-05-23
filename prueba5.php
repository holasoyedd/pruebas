<?php

//Acortador de palabras Actividad 5

function solution($message, $k){
    
    if(strlen($message) < 1){  //palabra corta
        return "";
    }

    $resultado = array(); //array resultado
    $palabra = "";
    $stringArray = str_split($message); //hacer mensaje array

    for($i = 0; $i < strlen($message); $i++){
        if($stringArray[$i] == " "){
            array_push($resultado, $palabra); //agregar palabra al resultado
            $palabra = "";
        }else{
            $palabra = $palabra.$stringArray[$i]; //crear palabra
        }

        if(($i + 1) === strlen($message) && $palabra){
            array_push($resultado, $palabra);
        }

        if(($i + 1) == $k){
            if($stringArray[$i + 1] == " " && $palabra){ //detectar vacío
                array_push($resultado, $palabra);
            }
            break; //fin del acortador
        }
    }

    return implode(" ",$resultado); //juntar el array final para mostrar resultado
}

//caso 1: Codility We
$number = 14;
$mesaggeAdd = "Codility We test coders";

//caso 2: Why not
/* $number = 100;
$mesaggeAdd = "Why not"; */

//caso 3: The quick brown fox jumps over the lazy
/* $number = 39;
$mesaggeAdd = "The quick brown fox jumps over the lazy dog"; */

//caso 4: To crop or not to
/* $number = 21;
$mesaggeAdd = "To crop or not to crop"; */

echo("Número: ".$number);
echo("<br>");
echo("Mensaje: ".$mesaggeAdd);
echo("<br>");
echo "Final es: ".solution($mesaggeAdd, $number);

?>