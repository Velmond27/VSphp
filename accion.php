<?php
$A=$_POST['A'];
$B=$_POST['B'];
if ($A > $B)
echo ' A es mayor que B' ;
else {
    echo 'B es mayor que A';
}

echo "\n Conteo hasta 10 : ";
while($A <= 10)
{
    echo "  $A ,";
    $A= $A+1;
}
?>