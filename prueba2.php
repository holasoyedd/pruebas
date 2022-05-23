<?php

//Borrar ROWS defectuosas Actividad 2

function solution($s){
    
    $x = preg_split("(\n+)", $s); //división por regex

    $arrayDeArrays = array(); //array para poder convertir a CSV

    foreach($x as $valor){
        $arrayNuevo = explode(",", $valor); //iterar las columnas de cada fila

        $noHayNull = true;

        foreach($arrayNuevo as $valorPeque){

            if($valorPeque == "NULL"){
                $noHayNull = false;
            }
        }

        if($noHayNull){
            array_push($arrayDeArrays, $arrayNuevo); //si no hay algún NULL se agrega al array final
        }
    }

    $fp = fopen('fichero.csv', 'w'); //ser crea CSV
    
    foreach($arrayDeArrays as $campos){
        fputcsv($fp, $campos);
    }

    fclose($fp);

    echo("Listo");
}

//$stringRecibido = "id,name,age,score\n1,Jack,NULL,12\n17,Betty,28,11"; //caso 1
//$stringRecibido = "header,header\nANNUL,ANNULLED\nnull,NILL\nNULL,NULL"; //caso 2
$stringRecibido = "country,population,area\nUK,67m,242000km2"; //caso 3
solution($stringRecibido);

?>