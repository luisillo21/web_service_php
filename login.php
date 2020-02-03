<?php 


if(isset($_REQUEST['usuario']) && isset($_REQUEST['clave']))
{
include "database.php";
$Usuario=$_REQUEST['usuario'];
$Clave=$_REQUEST['clave'];
$Query="Select * from conf_usuario where usuario='$Usuario'	and clave='$Clave'";
$Consulta=mysqli_query($connection,$Query);
$arreglo= array();

while($recibido = mysqli_fetch_assoc($Consulta))
{
array_push($arreglo, $recibido);
}
print json_encode($arreglo,JSON_FORCE_OBJECT);
mysqli_close($connection);
}
?>