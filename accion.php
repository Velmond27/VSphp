<?php
$nombre=$_POST['nombre'];
$sexo=$_POST['sexo'];
$edad=$_POST['edad'];
$civil=$_POST['civil'];

echo nl2br("\nNombre:\n $nombre " );

echo nl2br("\nEdad: \n$edad ");

echo nl2br("\nEstado\n Civil: $civil ");

echo nl2br("\nSexo:\n $sexo ");
?>