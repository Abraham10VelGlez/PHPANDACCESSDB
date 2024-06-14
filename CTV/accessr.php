<?php
/*
EJEMPLO FUNCIONAL DE ACCESS CON PHP

//parametros de conexion con la base de datos de access 2010
$c= odbc_connect("aa", "", "");
//query
$sql="select todo from todoTD";
//union para ejecutar y devolver
$query = odbc_exec($c, $sql);
//objeto devuelto para extraer
$d=odbc_fetch_object($query);
//mostrando datos del objeto devuelto...
echo $d->todo;

*/


 header('Content-Type: text/html; charset=iso-8859-1');

//parametros de conexion con la base de datos de access 2010
$c= odbc_connect("aa", "", "");
//query
$sql="select * from todoTD";
//union para ejecutar y devolver
$query = odbc_exec($c, $sql);
//objeto devuelto para extraer
$d=odbc_result_all($query);
//mostrando datos del objeto devuelto...
print($d);


?>