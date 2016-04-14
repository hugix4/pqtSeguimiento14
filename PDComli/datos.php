<?php include("seguridad.php");?>		
<html>
	<head>
	<link href="Favicon.ico" type="image/x-icon" rel="shortcut icon" />
	 <!--[if lt IE 9]> 
	<script type="text/javascript"> 
	   document.createElement("nav"); 
	   document.createElement("header"); 
	   document.createElement("footer"); 
	   document.createElement("section"); 
	   document.createElement("article"); 
	   document.createElement("aside"); 
	   document.createElement("hgroup"); 
	</script> 
	<![endif]-->
		<title>Coordinaci&oacute;n General de Lenguas UNAM</title>
		<link rel="stylesheet" href="css/hugixR.css" type="text/css" media="screen" />
		<link rel="stylesheet" type="text/css" href="print.css" media="print" />
		 
	 <div id="loop"><img border="0" alt="Universidad Nacional Aut&oacute;noma de M&eacute;xico, Coordinaci&oacute;n General de Lenguas" src="images/CGLh1a.png"  width="1200px" height="20%" align="center" border="0" usemap="#CGLh"/></a>
<table border=0 width="100%"><tr><td align="center">
<map name="CGLh"> 
<area alt="Universidad Nacional Aut&oacute;noma de M&eacute;xico" shape="rect" coords="0,0,549,120" href="http://www.unam.mx">
<area alt="Coordinaci&oacute;n General de Lenguas" shape="rect" coords="550,0,1300,120" href="http://www.cgl.unam.mx">
</map>

 </table></div>
	</head>
 
	
	<body>
	<!--****************************Esta es la secci�n destinada a la barra del men� principal de todo el portal********************************************-->	
	<div id="menu">			
					<ul class="menu">
						</br><b style="color: #000066;">Sistema de informaci�n del seguimiento de grupos piloto</b>										
					</ul>
	</div>
<!--****************************Termino de la secci�n de la barra del men� principal de todo el portal********************************************-->	
<div id="wrapper"><!-- Aqu� se envuelve todo el contenido de la p�gina -->
	<section id="main" align='center'><!-- contenido principal y menus laterales -->				        		
		
		</br>
		<h1>Bienvenido(a)<?php echo" ".$_SESSION["user"];?></h1> </br>
		<?php
		include('abre_seguimiento.php');  
		$query = "select * Nombre,Paterno,Materno,Plantel,Turno,Unidad, Utilizo, Contribuyo, Agrado, Problema, Observaciones,Hora from $tabla where Completo='Si'"; 
		$result = mysql_query($query) or die ("Tus datos no se encuentran registrados");
		echo "select Nombre,Paterno,Materno,Plantel,Turno,Unidad, Utilizo, Contribuyo, Agrado, Problema, Observaciones,Hora from $tabla where Completo='Si'";
		
			echo "<div align='center'>  
    <table border='1' width='70%' style='font-family: Verdana; font-size: 8pt' id='table1' style='overflow-y:scroll'>         
        <tr align='center'> 
            <td><b>Nombre</b></td> 
            <td><b>Apellido Paterno</b></td> 
			<td><b>Apellido Materno</b></td> 
            <td><b>Plantel</b></td>
			<td><b>Turno</b></td>
			<td><b>Unidad</b></td>
			<td><b>Utilizo</b></td>
			<td><b>Contribuyo</b></td>
			<td><b>Agrado</b></td>
			<td><b>Problema</b></td>
			<td><b>Observaciones</b></td>
			<td><b>Hora</b></td>			
		</tr>";
		while ($registro = mysql_fetch_array($result))
		{ 
		
		echo "<table border='1' width='70%' style='overflow-y:scroll; font-family: Verdana; font-size: 10pt' id='table1' >
		<tr align='center'> 
            <td>".$registro["Nombre"]."</td> 
            <td>".$registro["Paterno"]."</td> 
			<td>".$registro["Materno"]."</td> 
            <td>".$registro["Plantel"]."</td> 
			<td>".$registro["Turno"]."</td> 
			<td>".$registro["Unidad"]."</td> 
			<td>".$registro["Utilizo"]."</td> 
			<td>".$registro["Contribuyo"]."</td> 
			<td>".$registro["Agrado"]."</td> 
			<td>".$registro["Problema"]."</td> 
			<td>".$registro["Observaciones"]."</td> 
			<td>".$registro["Hora"]."</td> 
		</tr>";}
		
		echo"<tr> 
            <td><h5 align='center'>Si hay alg�n error, escribe un mail a hugix4@live.com indicando el error</h3></td> 
        </tr> ";
    echo"</table>";
echo"</div> ";

		
		include('cierra_seguimiento.php');
		?>		
		
		
		<br><br>				
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<u><a href="mensual.php?mes=Mayo">Reporte Mayo 2014</a></u><br/><br/>-->		
		<u><a href="salir.php">Salir</a></br></br>
	</section><!-- Este es el fin tanto de las barras laterales como de el contenido-->	
	<footer>
					<section id="footer-area">
						<section id="footer-outer-block">
								<aside class="footer-segment">
											<ul>									
												<p class="foot">Hecho en M&eacute;xico, <a href="http://www.unam.mx">Universidad Nacional Aut&oacute;noma de M&eacute;xico (UNAM)</a>, todos los derechos reservados 2009 - 2012. Esta p&aacute;gina puede ser reproducida con fines no lucrativos, siempre y cuando se cite la fuente completa y su direcci&oacute;n electr&oacute;nica, y no se mutile. De otra forma requiere permiso previo por escrito de la instituci&oacute;n.<a href="creditos.html">Cr&eacute;ditos</a></p>												
											</ul>
								</aside><!-- primer columna del footer -->		
						</section><!-- Aqui se termina el footer editable -->
					</section><!-- Fin del espacio del footer -->
			</footer>
</div><!-- Fin de la "envoltura" -->
<!--Que no le digan y que no le cuenten, toda esta p�gina fue dise�ada en su totalidad por el Ingeniero Hugo Luna alias hugix4-->
</body>
</html>