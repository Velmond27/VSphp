<html>
<body>
 
<?php
$C=$_POST['C'];
$D=$_POST['D'];
$F=0;
$n=0;
if($C>$D){
    $C+=$D;
    echo nl2br("\n\nA+B:$C" );
}else{
    while($n <=$D){
        $C+=($C+1);
        $n++;
    }
    echo nl2br("\n\nsumatoria serie de C a D:$C" );
}

echo nl2br("\n\nIntereses:" );
if(isset($_POST["arte"])){
        echo nl2br("\nArte");
        $F+=10;}
    if(isset($_POST["danza"])){
        echo nl2br("\nDanza");
        $F+=20;}
    if(isset($_POST["teatro"])){
        echo nl2br("\nTeatro");
        $F+=40;}
    if(isset($_POST["baile"])){
        echo nl2br("\nBaile");
        $F+=50;}
    if(isset($_POST["escultura"])){
        echo nl2br("\nEscultura");
        $F+=50;}
    if(isset($_POST["astronomia"])){
        echo nl2br("\nAstronomia");
        $F+=100;}

echo nl2br("\n\nIntereses suma:$F" );

echo nl2br("\n\nSexo:\n" );        
    if (isset($_POST['sexo']))
            echo $_POST['sexo'];
?>
</body>
</html>