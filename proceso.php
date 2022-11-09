<?php
$Restau=$_POST['Restau'];
echo nl2br("Restaurante: $Restau ");

echo nl2br("\n\nSu Orden:" );
if(isset($_POST["pollo"]))
        echo nl2br("\nPollo");
     
    if(isset($_POST["res"]))
        echo nl2br("\nRes");
         
    if(isset($_POST["puerco"]))
        echo nl2br("\nPuerco");
     
    if(isset($_POST["pavo"]))
        echo nl2br("\nPavo");

    if(isset($_POST["agua"]))
        echo nl2br("\nAgua");
    
    if(isset($_POST["limonada"]))
        echo nl2br("\nLimonada");

echo nl2br("\n\nMetodo de Pago:\n" );        
    if (isset($_POST['pago']))
            echo $_POST['pago'];
?>