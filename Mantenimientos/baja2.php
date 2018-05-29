<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php
extract($_REQUEST, EXTR_PREFIX_ALL|EXTR_REFS, 'f');
if ( $mysqli = new mysqli('127.0.0.1','root','Sama123*','ejemplo'));
if ($mysqli->connect_errno) 
{
echo "<a href=index.html>Error al conectar</a>";
exit ;
}
foreach ($f_borrar as $indice => $valor)
{
if ($valor=="on")
{$linea1="DELETE FROM empresa ";
$linea2=" WHERE id='$indice' ";
$consulta=$linea1.$linea2;
echo "$consulta";
if (!$mysqli->query($consulta))
{
echo "<a href=index.html>Error en el borrado</a>";
exit;
}
}
}
echo "<br>Borrado correcto";
echo "<br><br><a href='baja.php'>Otra baja</a>";
echo "<br><br><a href='index.html'>Inicio</a>";
mysqli_close($mysqli);
?>
</body>
</html>