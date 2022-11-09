<html>
<form action="accion.php" method="post">
  
<br />
<input name="cbipeliculas" type="checkbox" />Películas
<br />
<input name="cbilibros" type="checkbox" />Libros
<br />
<input name="cbiinternet" type="checkbox" />Internet
 

<p>Nombre: <input type="text" name="nombre" /></p>
 <p>Edad: 
   <select name="edad">
   <option>no especificado</option>
     <option>0 a 5</option>
     <option>6 a 20</option>
     <option>21 a 30</option>
     <option> 31 a 70</option>
     <option> 70 a 100</option>
   </select>
</p>
 <p>Sexo: 
   <select name="sexo">
   <option>no especificado</option>ss
     <option>Masculino</option>
     <option>Femenino</option>
   </select>
</p>
<p>Estado Civil: 
   <select name="civil">
   <option>no especificado</option>
     <option>Soltero</option>
     <option>Viudo</option>
     <option>Casado</option>
     <option>Union Libre</option>
     <option>Otro</option>
   </select>
</p>
 <p><input type="submit" /></p>
</form>
</html>