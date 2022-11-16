<html>
<body>

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
        $C+=($SUMA+1);
        $n++;
    }
    echo nl2br("\n\nsumatoria serie de C a D:$C" );
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