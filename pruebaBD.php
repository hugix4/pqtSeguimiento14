<?php
include('conexionh.php');
$conexion=new conexion();
$conexion->conectar();
session_start();
//Se verifica el usuario y su contraseña     
$Cuenta = $_POST[Cuenta];
    $sql = "select Cuenta,Nombre from BDalumnos2014 where Cuenta =".$Cuenta;
	$c1="select Cuenta,Nombre from BDalumnos2014 where Cuenta =".$Cuenta;
    $sql=$conexion->consulta($sql);
	if(mysql_num_rows($sql)>0){
	
	$con=mysql_fetch_array($sql);
	if($con[Cuenta]==$Cuenta){
		//echo "Es igual a cuenta, o sea ".$con['Cuenta']." es igual a $Cuenta y el nombre del alumno es:".$con['Nombre'];
		$_SESSION["a1"]="1";
		$_SESSION["Cuenta"]=$Cuenta;
		$_SESSION["Nombre"]=$con[Nombre];
		/*echo $_SESSION["a1"];
		echo " y ";
		echo $_SESSION["Cuenta"];*/
?>
		<script language="Javascript">

		location.href='paqt.php';

		</script>
<?
		
		//header("Location:paqt.php");
	}
	else
		echo "Ninguna $Cuenta y ".$con[Cuenta];//header('Location:pdidactico.php?Cuenta'.$con[Cuenta]);
	}
	

	echo "</table>";
?>