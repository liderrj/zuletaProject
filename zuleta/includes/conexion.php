<?php

$servidor = "localhost";
$puerto = 3306;
$usuario = "root";
$clave = "improve";
$bd = "sbtpim";

$conn = mysql_connect("$servidor:$puerto",$usuario,$clave) or die("Error: ".mysql_error());

mysql_select_db($bd) or die("Error: ".mysql_error());

?>
