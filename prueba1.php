<?php

//Periodo Binario Actividad 1

function solution($N){
    $d = array(); //array binario
    $l = 0; //contador
    $res = -1;

    //conversión binaria
    while($N > 0){
        $d[$l] = $N % 2;
        $N = intdiv($N, 2); //división entera
        $l += 1;
    }

    for($p = 1; $p < $l; $p++){
        if($p <= $l / 2){
            $isOk = True; //bandera

            for($i = 0; $i < $l - $p; $i++){
                if($d[$i] != $d[$i+$p]){
                    $isOk = false;
                    break;
                }
            }

            if($isOk){
                $res = $p;
            }
        }
    }
    return $res;
}

$resultado = solution(955);
echo $resultado;

?>