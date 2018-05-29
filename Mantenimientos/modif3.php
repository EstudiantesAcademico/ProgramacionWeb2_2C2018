<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php
extract($_REQUEST, EXTR_PREFIX_ALL|EXTR_REFS, 'f');
$linea1="UPDATE empresa ";
$linea2=" SET nombre='$f_nombre', web='$f_web', telef='$f_telef',
sector='$f_sector', descrip='$f_descrip', karma='$f_karma' ";
$linea3=" WHERE id='$f_id' ";
$consulta=$linea1.$linea2.$linea3;
echo $consulta;
if ( $mysqli = new mysqli('127.0.0.1','root','Sama123*','ejemplo'));
if ($mysqli->connect_errno) 
{
echo "<a href=index.html>Error al conectar</a>";
exit ;
}
if (!$mysqli->query($consulta))
{
echo "<a href=index.html>Error al modificar</a>";
exit;
}
echo "<br>Modif correcta";
echo "<br><br><a href='modif.php'>Otra modif</a>";
echo "<br><br><a href='index.html'>Inicio</a>";
mysqli_close($mysqli); ?>
</body>
</html>