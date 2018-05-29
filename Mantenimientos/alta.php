<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
 <title>alta2</title>
<meta name="GENERATOR" content="Quanta Plus">
 <meta http-equiv="Content-Type" content="text/html; charset=iso8859-1">
</head>
<body>
<?php
extract($_REQUEST, EXTR_PREFIX_ALL|EXTR_REFS, 'f');
$linea1="INSERT INTO empresa (nombre, web, telef, sector,
descrip, karma) ";
$linea2=" VALUES ('$f_nombre', '$f_web', '$f_telef', '$f_sector',
'$f_descrip', '$f_karma') ";
$consulta=$linea1.$linea2;
echo $consulta;
if ( $mysqli = new mysqli('127.0.0.1','root','Sama123*','ejemplo'));
if ($mysqli->connect_errno) 
{
echo "<a href=index.html>Error al conectar</a>";
exit ;
}

if (!$mysqli->query($consulta))
{
echo "Falló la creación de la tabla: (" . $mysqli->errno . ") " . $mysqli->error;
exit;
}
echo "<br>Alta correcta";
echo "<br><br><a href='alta.html'>Otra alta</a>";
echo "<br><br><a href='index.html'>Inicio</a>";
mysqli_close($mysqli);
?>
</body>
</html>
