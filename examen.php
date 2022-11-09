<html>
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
</html>