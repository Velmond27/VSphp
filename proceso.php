<html>
<head>
  <meta charset="utf-8">
  <title>Ticket</title>
</head>
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
</body>
</center>
</html>