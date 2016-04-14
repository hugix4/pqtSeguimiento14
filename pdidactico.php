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
		 
	 <div id="loop"><img border="0" alt="Universidad Nacional Aut&oacute;noma de M&eacute;xico, Coordinaci&oacute;n General de Lenguas" src="images/CGLh1a.png"  width="1200px" height="10%" align="center" border="0" usemap="#CGLh"/></a>
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
						</br><b style="color: #000066;">Paquetes Did�cticos 2014-15</b>										
					</ul>
	</div>
<!--****************************Termino de la secci�n de la barra del men� principal de todo el portal********************************************-->	
<div id="wrapper"><!-- Aqu� se envuelve todo el contenido de la p�gina -->
	<section id="main" align='center'><!-- contenido principal y menus laterales -->	

		<style type='text/css'>
					a:hover{color:#cb9d01;}
				  p {
					font-family:Century Gothic, sans-serif;
					font-size:14px;
					color: #fff;
					}

					p4{
					font-family:Century Gothic, sans-serif;
					font-size:12%;
					color: #fff;
					}	
					
					div.tabla_centro{
					text-align: center;
					}

					div.tabla_centro table {
					margin: 0 auto;
					text-align: center;
					}
					
		</style>
			<div class=tabla_centro>
				<form action="control_paq.php" method="post">
					<tr>
					<td colspan="2" align="center">
					<?php if($_GET["errorusuario"]=="si"){?>		
					<span style="color:red"><b><br/>No se encuentra tu n�mero de cuenta<br/>Intenta nuevamente<br/>O pide que se te de de alta en el sistema, en la Mediateca de tu Plantel</b></span>
					<?php }else{?>
						</br></br><b>Teclea tu n�mero de cuenta<b/>
					<?php } ?></td>
					</tr><br><br>
					<tr>
						<td align="right">#Cuenta:</td>
						<td><input type="text" name="Cuenta" size="6" maxlength="9"></td>
					</tr><br><br>
					<tr><td><input type="submit" value="Entrar"></td>
					</tr></br></br></br>
				</form>
			</div>
			<br/>
			
	</section><!-- Este es el fin tanto de las barras laterales como de el contenido-->	
			<footer>
					<section id="footer-area">
						<section id="footer-outer-block">
								<aside class="footer-segment">
											<ul>									
												<p class="foot">Hecho en M&eacute;xico, <a href="http://www.unam.mx">Universidad Nacional Aut&oacute;noma de M&eacute;xico (UNAM)</a>, todos los derechos reservados 2009 - 2014. Esta p&aacute;gina puede ser reproducida con fines no lucrativos, siempre y cuando se cite la fuente completa y su direcci&oacute;n electr&oacute;nica, y no se mutile. De otra forma requiere permiso previo por escrito de la instituci&oacute;n.<a href="creditos.html">Cr&eacute;ditos</a></p>
												
											</ul>
								</aside><!-- primer columna del footer -->		
						</section><!-- Aqui se termina el footer editable -->
					</section><!-- Fin del espacio del footer -->
			</footer>
</div><!-- Fin de la "envoltura" -->
<!--Que no le digan y que no le cuenten, toda esta p�gina fue dise�ada en su totalidad por el Ingeniero Hugo Luna alias hugix4-->
</body>
</html>