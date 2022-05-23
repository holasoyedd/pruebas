<?php

//Encontrar horas interesantes Actividad 3

function solution($S, $T) {
    $interesantesTotales = 0;
    $diaDeHoy = date('Y-m-d'); //formato del día actual
    $tiempoInicial = strtotime("$diaDeHoy $S"); //fecha Unix
    $tiempoFinal = strtotime("$diaDeHoy $T");
    for($tiempo = $tiempoInicial; $tiempo <= $tiempoFinal; $tiempo++) { //iterar el tiempo en Unix
        $interesantesTotales += contador_interesante($tiempo); //obtención de la función contador
    }
    return $interesantesTotales;
}

function contador_interesante($tiempo) {
    $hms = date('His', $tiempo); //hora en 24, minutos y segundos a dos dígitos
    $digitos = array_unique(str_split($hms)); //dividir el tiempo y eliminar elementos repetidos
    return count($digitos) <= 2; //devolver 1 cuando sean menores a dos y contarlos
}

$horaInicial = '15:15:00';
$horaFinal = '15:15:12';
echo " Entre $horaInicial y $horaFinal hay una cantidad de ".solution($horaInicial, $horaFinal)." hora(s) interesante(s)";

?>