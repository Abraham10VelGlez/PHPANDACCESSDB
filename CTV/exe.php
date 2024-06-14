<?php

$varavg23 = isset($_POST['a1']) ? $_POST['a1']:"";
$varavg34 = isset($_POST['a2']) ? $_POST['a2']:"";

if(empty($varavg23) || empty($varavg34)){
//die('ERROR EL LA CONEXION CON ODBC DE ACCESS<br>FAVOR DE VERICAR LOS DATOS');
//die('');
}else
{
//conexion con municipio 94
	//parametros de conexion con la base de datos de access 2010
$c= odbc_connect("$varavg23", "", "") or die('ERROR EL LA CONEXION CON ODBC DE ACCESS');
header('Content-Type: text/html; charset=iso-8859-1');

$commandnomsql="select * from gc101t03";
$ravg = odbc_exec($c, $commandnomsql);
//echo $navg = odbc_result_all($ravg);
while (odbc_fetch_row($ravg)) {
	
	$navg = odbc_result($ravg, "NOMMPIO");
}
echo '<center>
<table >
	<tr>
		<td>
			<h4><p style="color:rgb(130, 0, 0);font-size: 20px;"> Resumen de Movimientos </p></h4>
		</td>
		<td>
			&nbsp;&nbsp;&nbsp;
		</td>
		<td>
			&nbsp;&nbsp;&nbsp;
		</td>
		<td>
			<h4 style="font-size: 12px;"><strong>Municipio</strong> '.$navg.' </h4>
		</td>
	</tr>
</table>
</center>';

//conexion con municipio 57
//$c= odbc_connect("mun57", "", "");
//query
  //$sql="select Descripción,Municipio,Zomacd,Descripcion2,Macoateu,Fu,Fb,Vx2,texto from todoTD";
$sql="select * from todoTD";
//union para ejecutar y devolver
//$query = odbc_exec($c, $sql);
echo"<table border=2 style='
    font-size:  small;
    border-spacing:  initial;
    border-style:  none;
    border-bottom: rgb(130, 0, 0);
    border-left: transparent;
    border-right:  transparent;
    border-collapse:  collapse;
    border-top: transparent;'>";
    /*
echo "<tr>
	<td>
	Descripci&oacute;n	
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
	</tr>";
*/
$result = odbc_exec($c, $sql);
//echo odbc_result_all($result);
while (odbc_fetch_row($result)) {
	echo "<tr><td>";
	echo odbc_result($result, "Descripcion"), "<br>";
	//Descripción
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
echo "
<br>
<br>
<table>
	<tr>
		<td>

		".utf8_decode($varavg34)."		

		</td>
	</tr>
</table>
";


}
?>
