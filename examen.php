<html>
<head>
  <meta charset="utf-8">
  <title>Ordenes</title>
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
<form action="proceso.php" method="post">
  MENU:
<br />
<input name="pollo" type="checkbox" value="Pollo"  />Pollo
<br />
<input name="res" type="checkbox"  value="Res"/>Res
<br />
<input name="puerco" type="checkbox" value="Puerco" />Puerco
<br />
<input name="pavo" type="checkbox" value="Pavo" />Pavo
<br />
<input name="agua" type="checkbox" value="Agua"/>Agua
<br />
<input name="limonada" type="checkbox" value="Limonada"/>Limonada
<br>
<br>
<br>
Forma de Pago:
<br>
<input name="pago" type="radio" value="Efectivo" checked="checked" />Efectivo
<br />
<input name="pago" type="radio" value="Tarjeta" />Tarjetas
<br />
<input name="pago" type="radio" value="Vales de Despensa" />Vales de Despensa
<br />
<input name="pago" type="radio" value="Otro" />Otro


<p>Restaurante: 
   <select name="Restau">
   <option>no especificado</option>
     <option>Gorditas pepe</option>
     <option>Doña Tota</option>
     <option>Cafeteria</option>
     <option>Tim Wotons</option>
     <option>Otro</option>
   </select>
</p>
 <p><input type="submit" /></p>
</form>
</body>
</center>
</html>