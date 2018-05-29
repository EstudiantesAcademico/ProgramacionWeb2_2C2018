<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-
8859-1">
</head>
<body>
<?php
$linea1="SELECT id, nombre, web, telef, sector, descrip, karma FROM empresa ";
$consulta=$linea1;
if ( $mysqli = new mysqli('127.0.0.1','root','Sama123*','ejemplo'));
if ($mysqli->connect_errno) 
{
echo "<a href=index.html>Error al conectar</a>";
exit ;
}
if ($result=mysqli_query( $mysqli,$consulta))
{
echo "<h2>Seleccione empresa/s a modificar</h2>";
echo "<CENTER>";
echo "<FORM ACTION=modif2.php METHOD=POST>";
echo "<TABLE BORDER=1>";
 while ($data = mysqli_fetch_object($result)) 
 {
    $id=$data->id;
    $nombre = $data->nombre;
    $web = $data->web;
    $descrip = $data->descrip;
    $telef = $data->telef;
    $sector = $data->sector;
    echo "<TR><TD><INPUT type='radio' name='modif' value='$id'></TD><TD>$nombre</TD><TD>$descrip</TD><TD>$web</TD><TD>$telef</TD><TD>$sector</TD></TR>";
}
echo "</TABLE>";
echo "<INPUT type='submit' value='Modif'>";
echo "</FORM>";
echo "</CENTER>";
}
mysqli_free_result($result);
mysqli_close($mysqli);
?>
</body>
</html>