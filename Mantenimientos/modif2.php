<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php extract($_REQUEST, EXTR_PREFIX_ALL|EXTR_REFS, 'f');
$linea1="SELECT id, nombre, web, telef, sector, descrip, karma FROM empresa ";
$linea2=" WHERE id='$f_modif' ";
$consulta=$linea1.$linea2;
if ( $mysqli = new mysqli('127.0.0.1','root','Sama123*','ejemplo'));
if ($mysqli->connect_errno) 
{
echo "<a href=index.html>Error al conectar</a>";
exit ;
}
?>
<h2>Modif de empresa</h2>
<center>
<FORM action='modif3.php' method='POST'>
<TABLE border=0>
<?php
if ($result=mysqli_query( $mysqli,$consulta))
{
	 while ($data = mysqli_fetch_object($result)) 
 {
    $id=$data->id;
    $nombre = $data->nombre;
    $web = $data->web;
    $descrip = $data->descrip;
    $telef = $data->telef;
    $sector = $data->sector;
    $karma = $data->karma;
?>
<TR><TD>Nombre</TD><TD><INPUT type='text' name='nombre' size='30' maxlength='30'value='<?php echo $nombre ; ?>' ></TD></TR>
<TR><TD>Web</TD><TD><INPUT type='text' name='web' size='30' maxlength='30'value='<?php echo $web ; ?>'></TD></TR>
<TR><TD>Telef</TD><TD><INPUT type='text' name='telef' size='20' maxlength='20'value='<?php echo $telef ; ?>'></TD></TR>
<TR><TD>Sector</TD><TD><INPUT type='text' name='sector' size='30' maxlength='30'value='<?php echo $sector ; ?>'></TD></TR>
<TR><TD>Descrip</TD><TD><INPUT type='text' name='descrip' size='50' maxlength='50'value='<?php echo $descrip ; ?>'></TD></TR>
<TR><TD>Karma</TD><TD><INPUT type='text' name='karma' size='3' maxlength='3'value='<?php echo $karma ; ?>'></TD></TR>
</table>
<INPUT type='hidden' name='id' value='<?php echo $id ; ?>'>
<INPUT type='submit' value='Aceptar'>
</FORM>
</center>
<?php
}
}
mysqli_free_result($result);
mysqli_close($mysqli);?>
</body>
</html>