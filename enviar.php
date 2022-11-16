<html>
<body>
  <center>
<body style="/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#8fd32a+0,83db69+0,83db69+28,83db69+37,ffffff+100 */
background: #ff9554; /* Old browsers */
background: -moz-linear-gradient(top,  #ff2f2f 20%, #ffffff 0%, #ffffff 28%, #ffffff 37%, #6d2a21 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  #ff2828 20%,#ffffff 0%,#ffffff 28%,#ffffff 37%,#6d2a21 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  hwb(0 26% 0%) 0%,#ffffff 0%,#ffffff 28%,#ffffff 37%,#6d2a21 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#8fd32a', endColorstr='#ffffff',GradientType=0 ); /* IE6-9 */
" >
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
</body>
</html>