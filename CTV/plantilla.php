<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/> 
	<title>Resumen de Movimientos</title>
</head>
<body>
<center><h4> Resumen de Movimientos &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Municipio TOLUCA </h4></center>
<center>
<table border="1">
	<tr>
	<td>
	Descripción	
	</td>
	<td>
	Municipio	
	</td>
	<td>
	Zomacd	
	</td>
	<td>
	Descripcion2	
	</td>
	<td>
	Macoateu	
	</td>
	<td>
	Fu	
	</td>
	<td>
	Fb	
	</td>
	<td>
	Vx2	
	</td>
	</tr>

</table>
</center>
<center>
<?php
 header('Content-Type: text/html; charset=iso-8859-1');
//parametros de conexion con la base de datos de access 2010
$c= odbc_connect("aa", "", "");
//query
//$sql="select Descripción,Municipio,Zomacd,Descripcion2,Macoateu,Fu,Fb,Vx2,texto from todoTD";
$sql="select * from todoTD";
//union para ejecutar y devolver
//$query = odbc_exec($c, $sql);
echo"<table border=2>";

$result = odbc_exec($c, $sql);
while (odbc_fetch_row($result)) {
	echo "<tr><td>";
	echo odbc_result($result, "Descripción"), "<br>";
	echo "</td>";
	echo "<td>";
   echo odbc_result($result, "Municipio"), "<br>";
   echo "</td>";
	echo "<td>";
	echo odbc_result($result, "Zomacd"), "<br>";
	echo "</td>";
	echo "<td>";
   echo odbc_result($result, "Descripcion2"), "<br>";
   echo "</td>";
	echo "<td>";
   echo odbc_result($result, "Macoateu"), "<br>";
   echo "</td>";
	echo "<td>";
   echo odbc_result($result, "Fu"), "<br>";
   echo "</td>";
	echo "<td>";
   echo odbc_result($result, "Fb"), "<br>";
   echo "</td>";
	echo "<td>";
   echo odbc_result($result,"Vx2"), "<br>";
   echo "</td></tr>";
}
echo"</table>";
?>
</center>
</body>
</html>
