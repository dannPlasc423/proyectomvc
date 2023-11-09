<?php

include_once('db.php');
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$clave=$_POST['clave'];

echo "Los datos son los siguientes:<br>";
echo "$nombres, $apellidos, $correo, $clave";



$conectar=conn();
$sql="INSERT INTO usuarios (nombres, apellidos, correo, clave)
VALUES ('$nombres', '$apellidos', '$correo', '$clave')";
$resul = mysqli_query($conectar , $sql) or trigger_error("Query Failed! SQL- Error: " .mysqli_error($conectar));

echo "$sql";




?>