<?php
include('conexionhcomli.php');
$conexion=new conexion();
$conexion->conectar();
session_start();
//Se verifica el usuario y su contraseña   
$Cuenta = $_POST[Cuenta];
//*********************************************************************************

if(isset($_GET[p])&&isset($_GET[c])){
$cuenta=$_GET[c];
$paquete=$_GET[p];
$sql = "select Cuenta,Nombre, Plantel from BDalumnos2014 where Cuenta ='$cuenta'";	
    $sql=$conexion->consulta($sql);	
	if(mysql_num_rows($sql)>0){
	
		$con=mysql_fetch_array($sql);
		if($con[Cuenta]==$cuenta){
			$_SESSION["a1"]="1";
			$_SESSION["Cuenta"]=$cuenta;
			$_SESSION["Nombre"]=$con[Nombre];			
			$_SESSION["Plantel"]=$con[Plantel];
			 header("Location:pdfp.php?p=$paquete&c=$cuenta");
		}
		else{
			header("Location:pdidactico.php?errorusuario=si");
		}
		
	}
	else{
			header("Location:pdidactico.php?errorusuario=si");			
			}

    
}
//No hubo datos previos************************************************************
else{
	if(!empty($Cuenta)){
	$sql = "select Cuenta,Nombre, Plantel from BDalumnos2014 where Cuenta ='$Cuenta'";
    $sql=$conexion->consulta($sql);	
	if(mysql_num_rows($sql)>0){
	
		$con=mysql_fetch_array($sql);
		if($con[Cuenta]==$Cuenta){
			$_SESSION["a1"]="1";
			$_SESSION["Cuenta"]=$Cuenta;
			$_SESSION["Nombre"]=$con[Nombre];
			$_SESSION["Plantel"]=$con[Plantel];
			header("Location:paqt.php?");
		}		
		else{
			header("Location:pdidactico.php?errorusuario=si");		
		}
		
	}
	else{
			header("Location:pdidactico.php?errorusuario=si");			
		}
	}	
	else{
			header("Location:pdidactico.php?errorusuario=si");			
		}
}
	
?>