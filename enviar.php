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
$C=$_POST['C'];
$D=$_POST['D'];

$n=$C;
if($C>$D){
    $C+=$D;
    echo nl2br("\n\nA+B:$C" );
}else{
    $SUMA=$C;
    while($n <$D){
        $n++;
        $SUMA+=$n;
        
    }
    echo nl2br("\n\nsumatoria serie de C a D:$SUMA" );
}
$F=0;
echo nl2br("\n\nIntereses:" );

if(isset($_POST["arte"])){
        echo nl2br("\nArte");
        $F=$F+10;}

    if(isset($_POST["danza"])){
        echo nl2br("\nDanza");
        $F=$F+20;}

    if(isset($_POST["teatro"])){
        echo nl2br("\nTeatro");
        $F=$F+40;}

    if(isset($_POST["baile"])){
        echo nl2br("\nBaile");
        $F=$F+30;}

    if(isset($_POST["escultura"])){
        echo nl2br("\nEscultura");
        $F=$F+50;}

    if(isset($_POST["astronomia"])){
        echo nl2br("\nAstronomia");
        $F+=100;
    }

echo nl2br("\n\nIntereses suma:$F" );

echo nl2br("\n\nSexo:\n" );        
    if (isset($_POST['sexo']))
            echo $_POST['sexo'];
?>
</body>
</html>