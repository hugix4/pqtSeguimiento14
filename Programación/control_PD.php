<?php
session_start();
include('cnxh.php');
$conexion=new conexion();
$conexion->conectar();
//Se verifica el usuario y su contraseña 
echo"Hola Hugo";  
$Cuenta = $_POST[Cuenta];
$Contra = $_POST[Contra];
//*********************************************************************************

//*********************************************************************************
$sql = "select Cuenta, Clave, Plantel from pd2015 where Cuenta ='$Cuenta' and Clave='$Contra'";	
echo $sql;
$sql=$conexion->consulta($sql);	
if($Cuenta!='-'){
	if(mysql_num_rows($sql)>0){	
		$con=mysql_fetch_array($sql);
		if($con[Cuenta]==$Cuenta && $con[Clave]==$Contra){
			
			$_SESSION["a1"]="1";
			$_SESSION["Cuenta"]=$Cuenta;
			$_SESSION["Plantel"]=$con[Plantel];
			//echo"Datos validos<br/><br/>";
			//header("Location:inscripcionPD.php");
		}
		
		else
		{
			//header("Location:inscripcionPD.html");	
		}		
	}
		else
		{
			//header("Location:inscripcionPD.html");
		}	
}else
		{
			//header("Location:inscripcionPD.html");
		}
?>