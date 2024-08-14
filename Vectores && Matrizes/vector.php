<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h3>VECTORES</h3>

    <?php
    $lista[]="Alfre";
    $lista[]=123;
    $lista[]=12.5;


    echo "primer elemento es: ".$lista[1];
    ?>
    <h3>MEDIANTE UN FOR</h3>
    <?php

    $lista2[]="peras";
    $lista2[]="manzanas";
    $lista2[]="bananas";
    $lista2[]="mandarinas";

    $n = count($lista2);
    echo $n;
    for($i=0; $i<$n; $i++){
        echo "<br> Elemento: ".$lista2[$i];
    }
    ?>
    <h3>ARREGLO MULTIDIMENCIONALES</h3>
    <?php
    $lista3 = array(
        array(20,100,"Potosi"),
        array(40,200,"La Paz"),
        array(60,500,"Pando")
    );
    $filas = count($lista3);
    for($i=0; $i<$filas;$i++){
        echo "<br>";
        $columnas= count($lista3[$i]);
        for($j=0;$j < $columnas;$j++){
            echo " ".$lista3[$i][$j];
        }
    }
    ?>

</body>
</html>