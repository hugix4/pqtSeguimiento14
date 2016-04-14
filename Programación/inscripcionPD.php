<?php
header("Content-Type: text/html;charset=utf-8");
require('secure_PD.php');
require_once('conexionh.php');
$Plantel=$_SESSION["Plantel"];
?>
<!doctype html>
<?php
//include('cnxh.php');
//$conexion=new conexion();
//$conexion->conectar();
//$nombreBD='pd2015';
$tituloEx='Paquetes Didácticos';
//$paginaSig='contPd.php';
//$mismaPag='pEC.html';
//$longitudUsr=9;
//$longitudClv=6;
?>
<html lang="es">
	<head>
		<title>Coordinación General de Lenguas</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"'>	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"><!-- Latest compiled and minified CSS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><!-- jQuery library -->
		<link rel="stylesheet" href="hugix.css" type="text/css" media="screen" /><!-- Mi hoja de estilos-->
		<link rel="stylesheet" href="css/hugixBS.css" type="text/css" media="screen" /><!-- Mi 2a hoja de estilos-->
		
		<script>
			function dirCGL()
			{
				var direccion="http://www.cgl.unam.mx";
				location.href=direccion;
			}
			
			function dirUNAM()
			{
				var direccion="http://www.unam.mx";
				location.href=direccion;
			}
			
			
			function datos()
			{	
				cta=document.getElementById("Cuenta").value;
				pat=document.getElementById("ApPat").value;
				mat=document.getElementById("ApMat").value;
				nom=document.getElementById("Nombre").value;
				gpo=document.getElementById("Gpo").value;
				if(cta==0 || pat==0 || mat==0 || nom==0 || gpo==0){
					alert("Favor de rellenar todos los campos con asterisco");
					return false;
				}
				else{
					var exReg=/^[0-9]{9}$/;
					if(!exReg.test(cta)){
						alert("El número de cuenta debe ser de 9 dígitos");
						return false;
					}
					else{
						confirmar=confirm("Los datos \n"+nom+" "+pat+" "+mat+" \ncon cuenta: "+cta+" \nSon correctos?"); 		
						if (confirmar==true) 
						// si pulsamos en aceptar
						return true;
						else 
						// si pulsamos en cancelar			
						return false;
					}
				}
			}
			
		</script>
	</head>
	<body style="margin-top: 0%; font-size:1.4em">
		<nav class="navbar navbar-inverse">			
				<div class="navbar-header">					
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>					  
					<a class="navbar-brand" href="#">
						<img src="images/LogoUNAMamarillo.png" alt="UNAM" height="80%" width="5.5%" onclick='dirUNAM()' style="cursor:pointer; position:absolute; top:16%; left:5%; height=10%;">
					</a>
					<a class="navbar-brand" href="#">
						<img alt="" src="images/LogoCGLblanco.png" alt="CGL" height="70%" width="12%" onclick='dirCGL()' style="cursor:pointer; position:absolute; top:20%; left:15%;">
					</a>
					
					  <!--<a class="navbar-brand" href="#">CGL</a>-->
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					  <p style="text-align: right;"><font style="color:#fff;font-size:2em; font-weight:bold;"><br/><?php echo $tituloEx;?></font></p>
					  
				</div><!--/.nav-collapse -->				
		  
		</nav>

		<br/>
		<div class="container container-fluid">	
			
			<form action="registroX.php" method="post" onsubmit="return datos()">	<p class="eval" style="text-align:center;">
			<br/>
			<table class='tablin1' style='width:100%; border-spacing:20px;'>
				<tr>
					<td>
						<label for="Cuenta"><font color="red">*</font>Cuenta:</label>
						<input type="text" name="Cuenta" id="Cuenta"> </input>
					</td>
					<td>
						<label for="ApPat"><font color="red">*</font>Apellido Paterno:</label>
						<input type="text" name="ApPat" id="ApPat"> </input>
					</td>
				</tr>
				<br/>
				<tr>
					<td>
						<label for="ApMat"><font color="red">*</font>Apellido Materno:</label>
						<input type="text" name="ApMat" id="ApMat"> </input>
					</td>
					<td>
						<label for="Nom"><font color="red">*</font>Nombre(s):</label>
						<input type="text" name="Nombre" id="Nombre"></input>
					</td>
				</tr>
				<br/>
				<br/>
				<tr>					
					<td>
						<label for="Gpo"><font color="red">*</font>Grupo:</label>
						<input type="text" name="Gpo" id="Gpo"></input>
					</td>
					<?php if($Plantel=='CGL'){
					echo"<td>
						<label for='Plantel'><font color='red'>*</font>Plantel:</label>
						<select type='list' name='Plantel' id='Plantel'>
										<option></option>
										<option value='ENP1'>ENP1</option>
										<option value='ENP2'>ENP2</option>
										<option value='ENP3'>ENP3</option>
										<option value='ENP4'>ENP4</option>
										<option value='ENP5'>ENP5</option>
										<option value='ENP6'>ENP6</option>
										<option value='ENP7'>ENP7</option>
										<option value='ENP8'>ENP8</option>
										<option value='ENP9'>ENP9</option>
										<option value='CCH Azcapotzalco'>CCH Azcapotzalco</option>
										<option value='CCH Naucalpan'>CCH Naucalpan</option>
										<option value='CCH Oriente'>CCH Oriente</option>
										<option value='CCH Sur'>CCH Sur</option>
										<option value='CCH Vallejo'>CCH Vallejo</option>
										<option value='FCPyS'>FCPyS</option>
										<option value='ENEO'>ENEO</option>
										<option value='ENTS'>ENTS</option>
										<option value='FAD'>FAD</option>
										<option value='FA'>FA</option>
									</select>
					</td>";
					}?>
				</tr>
			</table>
			<br/>
			<input type="submit" value="Registrar">
			<br/><br/>
			<a href='salirPD.php'><input type='button' value='Salir'></input></a>
		</form>
			
		</div><!-- container -->
		<br/>
		<br/>
		<br/>
		<br/>
		<footer class="footer">
			<div class="container">
				<p class="text-muted"><font style="font-size: 0.9em">
					Hecho en M&eacute;xico, <a href="http://www.unam.mx">Universidad Nacional Aut&oacute;noma de M&eacute;xico (UNAM)</a>, todos los derechos reservados 2009 - 2015. Esta p&aacute;gina puede ser reproducida con fines no lucrativos, siempre y cuando se cite la fuente completa y su direcci&oacute;n electr&oacute;nica, y no se mutile. De otra forma requiere permiso previo por escrito de la instituci&oacute;n.<a href="creditos.html">Cr&eacute;ditos</a></font>
				</p>
			</div>
		</footer>
		<!--Ingeniero Hugo Luna a.k.a. hugix4-->
	</body>
</html>