<?php
$A=$_POST['A'];
$B=$_POST['B'];
$C=0;

if($A>$B){
    $A+=$B;
    echo nl2br("\n\nA+B:$A" );
echo nl2br("\n\nIntereses:" );
if(isset($_POST["arte"])){
        echo nl2br("\nArte");
        $C+=10;}
    if(isset($_POST["musica"])){
        echo nl2br("\nMusica");
        $C+=8;}
    if(isset($_POST["arquitectura"])){
        echo nl2br("\nArquitectura");
        $C+=7;}
    if(isset($_POST["Astronomia"])){
        echo nl2br("\nastronomia");
        $C+=11;}
    if(isset($_POST["danza"])){
        echo nl2br("\ndanza");
        $C+=10;}
    if(isset($_POST["oratoria"])){
        echo nl2br("\noratoria");
        $C+=50;}
}
echo nl2br("\n\nIntereses suma:$C" );

echo nl2br("\n\nSexo:\n" );        
    if (isset($_POST['sexo']))
            echo $_POST['sexo'];

?>