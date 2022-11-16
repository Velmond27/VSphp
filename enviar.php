<?php
$A=$_POST['A'];
$B=$_POST['B'];
if($A>$B){
echo nl2br("\n\nInteresesn:" );
if(isset($_POST["arte"]))
        echo nl2br("\nArte");
     
    if(isset($_POST["musica"]))
        echo nl2br("\nMusica");
         
    if(isset($_POST["arquitectura"]))
        echo nl2br("\nArquitectura");
     
    if(isset($_POST["Astronomia"]))
        echo nl2br("\nastronomia");

    if(isset($_POST["danza"]))
        echo nl2br("\ndanza");
    
    if(isset($_POST["otra"]))
        echo nl2br("\notra");
}

echo nl2br("\n\nSexo:\n" );        
    if (isset($_POST['sexo']))
            echo $_POST['sexo'];

?>