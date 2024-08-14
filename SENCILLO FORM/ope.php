<?php 
$nombres = $_POST['nombre'];
$paterno = $_POST['paterno'];
$numeros = $_POST['numero'];
$genero = $_POST['genero'];
$profesion = $_POST['profesion'];



echo "El nombre que se envio es: ".$nombres;
echo "<br> El apellido es: ".$paterno;
echo "<br>El numeros que se envio es: ".$numeros;
echo "<br> El sexo es: ".$genero;
echo "<br> Su profesion es: ".$profesion;

?>