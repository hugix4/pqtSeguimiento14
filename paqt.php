<?php
require('secure_paq.php');
include('conexionh.php');
$conexion=new conexion();
$conexion->conectar();
?>		
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
	<!--****************************Esta es la sección destinada a la barra del menú principal de todo el portal********************************************-->	
	<div id="menu">			
					<ul class="menu">
						</br><b style="color: #000066;">Paquetes Didácticos</b>										
					</ul>
	</div>
<!--****************************Termino de la sección de la barra del menú principal de todo el portal********************************************-->	
<div id="wrapper"><!-- Aquí se envuelve todo el contenido de la página -->
	<section id="main" align='center'><!-- contenido principal y menus laterales -->				        		
	<!--============================Parte de despliegue de datos del usuario BD======================================================================-->	
		<?php
		$Nombre=$_SESSION['Nombre'];
		$Cuenta=$_SESSION['Cuenta'];
		$Plantel=$_SESSION['Plantel'];
		
		if(isset($_GET['p'])){
			$paquete="p".$_GET['p'];			
			header("Location:pdf$paquete.php");
		}
		else{
			?>
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
					
					.tablin{
					font-size:14px;
					font-family:Century Gothic, sans-serif;
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
			
			<br/>
			<div class=tabla_centro><table class=tablin align=center valign=middle border=0 width=50% cellpadding='20'>
				<td width=10%><p>Bienvenid@</p></td>		
				<td width=80%><?php	echo $Nombre;?></td>
				<td width=80%><?php	echo $Plantel;?></td>
				<td width=10%><u><a href='?*'> Cerrar sesión </a></u></td></table>
				
			</div>
			<br/>
			<div class=tabla_centro>
				<table class=tablin align=center valign=middle border=0 width=80% cellpadding='20' cellspacing='30'>
					<th colspan=4>Elige el paquete didáctico que te interesa utilizar</th>
				</table>
				
				<?php 
				if($Plantel=='Azcapotzalco' || $Plantel=='Naucalpan' || $Plantel=='Oriente' || $Plantel=='Sur' || $Plantel=='Vallejo'){?>
				
					<table class=tablin align=center valign=middle border=0 width=80% cellpadding='20' cellspacing='30'>
						<tr><th colspan=4>CCH Inglés 1-2</th></tr>
						<tr><td><u><a href='?1'>Be</a></u></td>
						<td><u><a href='?2'>Subject Pronouns</a></u></td>						
						<td><u><a href='?4'>Nationalities</a></u></td>
						<td><u><a href='?29'>Past be</a></u></td>
						</tr>
						<tr>
						<td><u><a href='?5'>Possessive Adjectives</a></u></td>
						<td><u><a href='?6'>Wh Questions</a></u></td>
						<td><u><a href='?7'>A / An</a></u></td>
						<td><u><a href='?8'>Family Members</a></u></td>
						</tr>
						<tr>						
						<td><u><a href='?10'>Simple Present(Have)</a></u></td>
						<td><u><a href='?11'>Simple Present(Likes/Dislikes)</a></u></td>
						<td><u><a href='?12'>Simple Present(Daily Routines)</a></u></td>
						<td><u><a href='?27'>Numbers</a></u></td>
						
						</tr>
						<tr>
						<td><u><a href='?13'>Directions and Prepositions</a></u></td>
						<td><u><a href='?14'>Prepositions of place</a></u></td>
						<td><u><a href='?15'>Prepositions of time</a></u></td>
						<td><u><a href='?16'>There Is/Are</a></u></td>
						</tr>
						<tr>					
						<td><u><a href='?17'>Quantifiers</a></u></td>
						<td><u><a href='?18'>Present Continuous</a></u></td>
						<td><u><a href='?19'>Can / Can't</a></u></td>
						<td><u><a href='?20'>Simple Past</a></u></td>
						</tr>
						<tr>
						<td><u><a href='?21'>Imperatives</a></u></td>
						<td><u><a href='?22'>Possessive Nouns</a></u></td>
						<td><u><a href='?23'>Demonstrative Adjectives</a></u></td>
						<td><u><a href='?24'>Connector then</a></u></td>
						</tr>
						<tr>
						<td><u><a href='?25'>Count and Uncontable Nouns</a></u></td>
						<td><u><a href='?26'>Alphabet</a></u></td>												
						</tr>
					</table>
					
					<br/><br/>
				<table class=tablin align=center valign=middle border=0 width=80% cellpadding='20' cellspacing='30'>
					<th colspan=4>CCH Inglés 3-4</th>
					<tr>
					<td><u><a href='?1c'>Be</a></u></td>
					<td><u><a href='?2c'>Simple present</a></u></td>
					<td><u><a href='?3c'>Comparatives / Superlatives</a></u></td>
					<td><u><a href='?4c'>Past be</a></u></td>
					</tr>
					<tr>
					<td><u><a href='?5c'>There was / There were</a></u></td>
					<td><u><a href='?6c'>Simple past tense</a></u></td>
					<td><u><a href='?7c'>Connectors I</a></u></td>
					<td><u><a href='?8c'>Connectors II</a></u></td>
					</tr>
					<tr>
					<td><u><a href='?9c'>Connectors III</a></u></td>
					<td><u><a href='?10c'>Going to</a></u></td>
					<td><u><a href='?11c'>Simple future</a></u></td>
					<td><u><a href='?12c'>Used to</a></u></td>
					</tr>
					<tr>
					<td><u><a href='?13c'>Past continuous</a></u></td>
					<td><u><a href='?14c'>Could</a></u></td>
					<td><u><a href='?15c'>Modal verbs I</a></u></td>
					<td><u><a href='?16c'>Modal verbs II</a></u></td>
					</tr>
					<tr>
					<td><u><a href='?17c'>Present perfect</a></u></td>
					</tr>
				</table>
					
				<?php }
				elseif($Plantel=='ENP1' || $Plantel=='ENP2' || $Plantel=='ENP3' || $Plantel=='ENP4' || $Plantel=='ENP5' || $Plantel=='ENP6' || $Plantel=='ENP7' || $Plantel=='ENP8' || $Plantel=='ENP9')
				{
				echo "
				
				
					<table class=tablin align=center valign=middle border=0 width=80% cellpadding='20' cellspacing='30'>
						<tr>
						<th colspan=4>ENP Inglés IV</th>
						</tr>
						<tr>
						<td><u><a href='?1'>Be</a></u></td>
						<td><u><a href='?2'>Subject Pronouns</a></u></td>						
						<td><u><a href='?4'>Nationalities</a></u></td>
						<td><u><a href='?29'>Past be</a></u></td>
						</tr>
						<tr>
						<td><u><a href='?5'>Possessive Adjectives</a></u></td>
						<td><u><a href='?6'>Wh Questions</a></u></td>
						<td><u><a href='?7'>A / An</a></u></td>
						<td><u><a href='?8'>Family Members</a></u></td>
						</tr>
						<tr>						
						<td><u><a href='?10'>Simple Present(Have)</a></u></td>
						<td><u><a href='?11'>Simple Present(Likes/Dislikes)</a></u></td>
						<td><u><a href='?12'>Simple Present(Daily Routines)</a></u></td>
						<td><u><a href='?28'>Going To</a></u></td>
						</tr>
						<tr>
						<td><u><a href='?13'>Directions and Prepositions</a></u></td>
						<td><u><a href='?14'>Prepositions of place</a></u></td>
						<td><u><a href='?15'>Prepositions of time</a></u></td>
						<td><u><a href='?16'>There Is/Are</a></u></td>
						</tr>
						<tr>					
						<td><u><a href='?17'>Quantifiers</a></u></td>
						<td><u><a href='?18'>Present Continuous</a></u></td>
						<td><u><a href='?19'>Can / Can't</a></u></td>
						<td><u><a href='?20'>Simple Past</a></u></td>
						</tr>
						<tr>
						<td><u><a href='?21'>Imperatives</a></u></td>
						<td><u><a href='?22'>Possessive Nouns</a></u></td>
						<td><u><a href='?23'>Demonstrative Adjectives</a></u></td>
						<td><u><a href='?24'>Connector then</a></u></td>
						</tr>
						<tr>
						<td><u><a href='?25'>Count and Uncontable Nouns</a></u></td>
						<td><u><a href='?26'>Alphabet</a></u></td>
						<td><u><a href='?27'>Numbers</a></u></td>
						
						</tr>
					</table>

					<br/><br/>
				<table class=tablin align=center valign=middle border=0 width=80% cellpadding='20' cellspacing='30'>
					<th colspan=4>ENP Inglés V</th>
					<tr>
					<td><u><a href='?1e'>Be</a></u></td>
					<td><u><a href='?2e'>Demonstratives</a></u></td>
					<td><u><a href='?3e'>Used to</a></u></td>
					<td><u><a href='?4e'>Simple past</a></u></td>
					</tr>
					<tr>
					<td><u><a href='?5e'>Should</a></u></td>
					<td><u><a href='?6e'>Simple present</a></u></td>
					<td><u><a href='?7e'>Prepositions of time</a></u></td>
					<td><u><a href='?8e'>Compliments</a></u></td>
					</tr>
					<tr>
					<td><u><a href='?9e'>Likes and dislikes</a></u></td>
					<td><u><a href='?10e'>Conditional I</a></u></td>
					<td><u><a href='?11e'>Conditional II</a></u></td>
					<td><u><a href='?12e'>Imperatives</a></u></td>
					</tr>
					<tr>
					<td><u><a href='?13e'>Directions</a></u></td>
					<td><u><a href='?14e'>Comparatives</a></u></td>
					<td><u><a href='?15e'>Superlatives</a></u></td>
					<td><u><a href='?16e'>Phone calls</a></u></td>
					</tr>
					<tr>
					<td><u><a href='?17e'>Ordering food</a></u></td>
					<td><u><a href='?18e'>Passive voice</a></u></td>
					<td><u><a href='?19e'>Present perfect</a></u></td>
					<td><u><a href='?20e'>Simple future</a></u></td>
					</tr>
					<tr>
					<td><u><a href='?21e'>Going to</a></u></td>
					<td><u><a href='?22e'>Present for future</a></u></td>
					<td ><u><a href='?23e'>Connectors</a></u></td>
					<td ><u><a href='?24e'>Requesting</a></u></td>
					</tr>
					<tr>
					<td><u><a href='?25e'>Modal verbs I</a></u></td>
					<td><u><a href='?26e'>Modal verbs II</a></u></td>
					<td><u><a href='?27e'>Could</a></u></td>
					</tr>
					
				</table>
				<br/><br/>
				<table class=tablin align=center valign=middle border=0 width=80% cellpadding='20' cellspacing='30'>
					<th colspan=4>ENP Inglés VI</th>
					<tr>
					<td ><u><a href='?1e6'>Inferencias</a></u></td>
					<td ><u><a href='?2e6'>Lectura global</a></u></td>
					<td ><u><a href='?3e6'>Relaciones semánticas</a></u></td>
					<td ><u><a href='?4e6'>'Scanning'</a></u></td>
					</tr>
					<tr>
					<td ><u><a href='?5e6'>Lectura detallada</a></u></td>
					<td ><u><a href='?6e6'>Estrategias de lectura I</a></u></td>
					<td ><u><a href='?7e6'>Estrategias de lectura II</a></u></td>
					<td ><u><a href='?8e6'>Conectores</a></u></td>
					</tr>
				</table>
					
				";} else if($Plantel=='FAD' || $Plantel=='ENEO' || $Plantel=='ENTS' || $Plantel=='UNAMlic')
				{
				echo "
				<table class=tablin align=center valign=middle border=0 width=80% cellpadding='20' cellspacing='30'>
					<th colspan=4>Licenciatura</th>
					<tr>
					<td><u><a href='?1'>Be+</a></u></td>
					<td><u><a href='?7'>A / An</a></u></td>
					<td><u><a href='?6'>Wh Questions</a></u></td>
					<td><u><a href='?5'>Possessive Adjectives</a></u></td>					
					</tr>
					<tr>
					<td><u><a href='?8'>Family Members</a></u></td>
					<td><u><a href='?7e'>Prepositions of time</a></u></td>
					<td><u><a href='?16'>There Is/Are</a></u></td>
					</tr>					
				</table>
				<br/><br/>
				<table class=tablin align=center valign=middle border=0 width=80% cellpadding='20' cellspacing='30'>
					<th colspan=4>Quizzes</th>
					<tr>
					<tr>
					<td><u><a href='?1q'>Verb Be – Simple Present</a></u></td>
					<td><u><a href='?2q'>Simple Present</a></u></td>
					<td><u><a href='?3q'>Articles a and an</a></u></td>
					<td><u><a href='?4q'>Wh- Questions</a></u></td>
					</tr>
					<tr>
					<td><u><a href='?5q'>Possessive Adjectives</a></u></td>
					<td><u><a href='?6q'>Family</a></u></td>
					<td><u><a href='?7q'>Prepositions of Time</a></u></td>
					<td><u><a href='?8q'>There is / are</a></u></td>
					</tr>					
				</table>
				
					";} 
					else if($Plantel=='FCPYS')
					{
					echo "
					<table class=tablin align=center valign=middle border=0 width=80% cellpadding='20' cellspacing='30'>
					<th colspan=4>Licenciatura Nivel 1</th>
					<tr>
						<td><u><a href='?1'>Simple present Be </a></u></td>
						<td><u><a href='?19'>Can / can&#39;t</a></u></td>
						<td><u><a href='?12'>Simple present other verbs</a></u></td>
						<td><u><a href='?5'>Possessive Adjectives</a></u></td>					
					</tr>
					<tr>
						<td><u><a href='?23'>Demonstrative adjectives</a></u></td>
						<td><u><a href='?16'>There Is/Are</a></u></td>
						<td><u><a href='?17'>Quantifiers</a></u></td>
						<td><u><a href='?14'>Quantifiers</a></u></td>
					</tr>
					<tr>
						<td><u><a href='?15'>Demonstrative adjectives</a></u></td>						
					</tr>
					</table>
					<br/><br/>
					<table class=tablin align=center valign=middle border=0 width=80% cellpadding='20' cellspacing='30'>
						<th colspan=4>Licenciatura Nivel 2</th>
						<tr>
							<td><u><a href='?4'>Simple past -Be </a></u></td>
							<td><u><a href='?6c'>Simple past Other verbs</a></u></td>
							<td><u><a href='?2c'>Simple present Other verbs</a></u></td>
							<td><u><a href='?5c'>There was / were</a></u></td>					
						</tr>
						<tr>
							<td><u><a href='?17'>Quantifiers</a></u></td>
							<td><u><a href='?18'>Present continuous</a></u></td>
							<td><u><a href='?22e'>Present continuous -Future</a></u></td>
							<td><u><a href='?21e'>Going to</a></u></td>
							</tr>
						<tr>
							<td><u><a href='?14e'>Comparatives</a></u></td>
							<td><u><a href='?20e'>Simple future</a></u></td>
							<td><u><a href='?15c'>Modal should</a></u></td>					
						</tr>
					</table>
					<br/><br/>
					<table class=tablin align=center valign=middle border=0 width=80% cellpadding='20' cellspacing='30'>
						<th colspan=4>Licenciatura Nivel 3</th>
						<tr>
							<td><u><a href='?13c'>Articles a / the</a></u></td>
							<td><u><a href='?1'>Simple present -Be</a></u></td>
							<td><u><a href='?18'>Present continuous</a></u></td>
							<td><u><a href='?4e'>Simple past other verbs</a></u></td>					
						</tr>
						<tr>
							<td><u><a href='?17'>Quantifiers</a></u></td>
							<td><u><a href='?3c'>Comparatives</a></u></td>
							<td><u><a href='?20e'>Simple future</a></u></td>
						</tr>
					</table>
					<br/><br/>
					<table class=tablin align=center valign=middle border=0 width=80% cellpadding='20' cellspacing='30'>
						<th colspan=4>Quizzes</th>
						<tr>
						<tr>
						<td><u><a href='?1q'>Verb Be – Simple Present</a></u></td>
						<td><u><a href='?2q'>Simple Present</a></u></td>
						<td><u><a href='?3q'>Articles a and an</a></u></td>
						<td><u><a href='?4q'>Wh- Questions</a></u></td>
						</tr>
						<tr>
						<td><u><a href='?5q'>Possessive Adjectives</a></u></td>
						<td><u><a href='?6q'>Family</a></u></td>
						<td><u><a href='?7q'>Prepositions of Time</a></u></td>
						<td><u><a href='?8q'>There is / are</a></u></td>
						</tr>					
					</table>
					
					";} else if($Plantel=='UNAM')
					{
				
					echo "<table class=tablin align=center valign=middle border=0 width=80% cellpadding='20' cellspacing='30'>
						<tr><th colspan=4>CCH Inglés 1-2</th></tr>
						<tr>
						<td><u><a href='?1'>Be</a></u></td>
						<td><u><a href='?2'>Subject Pronouns</a></u></td>						
						<td><u><a href='?4'>Nationalities</a></u></td>
						<td><u><a href='?29'>Past be</a></u></td>
						</tr>
						<tr>
						<td><u><a href='?5'>Possessive Adjectives</a></u></td>
						<td><u><a href='?6'>Wh Questions</a></u></td>
						<td><u><a href='?7'>A / An</a></u></td>
						<td><u><a href='?8'>Family Members</a></u></td>
						</tr>
						<tr>						
						<td><u><a href='?10'>Simple Present(Have)</a></u></td>
						<td><u><a href='?11'>Simple Present(Likes/Dislikes)</a></u></td>
						<td><u><a href='?12'>Simple Present(Daily Routines)</a></u></td>
						<td><u><a href='?27'>Numbers</a></u></td>
						</tr>
						<tr>
						<td><u><a href='?13'>Directions and Prepositions</a></u></td>
						<td><u><a href='?14'>Prepositions of place</a></u></td>
						<td><u><a href='?15'>Prepositions of time</a></u></td>
						<td><u><a href='?16'>There Is/Are</a></u></td>
						</tr>
						<tr>					
						<td><u><a href='?17'>Quantifiers</a></u></td>
						<td><u><a href='?18'>Present Continuous</a></u></td>
						<td><u><a href='?19'>Can / Can't</a></u></td>
						<td><u><a href='?20'>Simple Past</a></u></td>
						</tr>
						<tr>
						<td><u><a href='?21'>Imperatives</a></u></td>
						<td><u><a href='?22'>Possessive Nouns</a></u></td>
						<td><u><a href='?23'>Demonstrative Adjectives</a></u></td>
						<td><u><a href='?24'>Connector then</a></u></td>
						</tr>
						<tr>
						<td><u><a href='?25'>Count and Uncontable Nouns</a></u></td>
						<td><u><a href='?26'>Alphabet</a></u></td>												
						</tr>
					</table>					
					<br/>
					<br/>
					<table class=tablin align=center valign=middle border=0 width=80% cellpadding='20' cellspacing='30'>
						<th colspan=4>CCH Inglés 3-4</th>
						<tr>
						<td><u><a href='?1c'>Be</a></u></td>
						<td><u><a href='?2c'>Simple present</a></u></td>
						<td><u><a href='?3c'>Comparatives / Superlatives</a></u></td>
						<td><u><a href='?4c'>Past be</a></u></td>
						</tr>
						<tr>
						<td><u><a href='?5c'>There was / There were</a></u></td>
						<td><u><a href='?6c'>Simple past tense</a></u></td>
						<td><u><a href='?7c'>Connectors I</a></u></td>
						<td><u><a href='?8c'>Connectors II</a></u></td>
						</tr>
						<tr>
						<td><u><a href='?9c'>Connectors III</a></u></td>
						<td><u><a href='?10c'>Going to</a></u></td>
						<td><u><a href='?11c'>Simple future</a></u></td>
						<td><u><a href='?12c'>Used to</a></u></td>
						</tr>
						<tr>
						<td><u><a href='?13c'>Past continuous</a></u></td>
						<td><u><a href='?14c'>Could</a></u></td>
						<td><u><a href='?15c'>Modal verbs I</a></u></td>
						<td><u><a href='?16c'>Modal verbs II</a></u></td>
						</tr>
						<tr>
						<td><u><a href='?17c'>Present perfect</a></u></td>
						</tr>
					</table>
					<table class=tablin align=center valign=middle border=0 width=80% cellpadding='20' cellspacing='30'>
						<tr>
						<th colspan=4>ENP Inglés IV</th>
						</tr>
						<tr>
						<td><u><a href='?1'>Be+</a></u></td>
						<td><u><a href='?2'>Subject Pronouns</a></u></td>						
						<td><u><a href='?4'>Nationalities</a></u></td>
						<td><u><a href='?29'>Past be</a></u></td>
						</tr>
						<tr>
						<td><u><a href='?5'>Possessive Adjectives</a></u></td>
						<td><u><a href='?6'>Wh Questions</a></u></td>
						<td><u><a href='?7'>A / An</a></u></td>
						<td><u><a href='?8'>Family Members</a></u></td>
						</tr>
						<tr>						
						<td><u><a href='?10'>Simple Present(Have)</a></u></td>
						<td><u><a href='?11'>Simple Present(Likes/Dislikes)</a></u></td>
						<td><u><a href='?12'>Simple Present(Daily Routines)</a></u></td>
						<td><u><a href='?28'>Going To</a></u></td>
						</tr>
						<tr>
						<td><u><a href='?13'>Directions and Prepositions</a></u></td>
						<td><u><a href='?14'>Prepositions of place</a></u></td>
						<td><u><a href='?15'>Prepositions of time</a></u></td>
						<td><u><a href='?16'>There Is/Are</a></u></td>
						</tr>
						<tr>					
						<td><u><a href='?17'>Quantifiers</a></u></td>
						<td><u><a href='?18'>Present Continuous</a></u></td>
						<td><u><a href='?19'>Can / Can't</a></u></td>
						<td><u><a href='?20'>Simple Past</a></u></td>
						</tr>
						<tr>
						<td><u><a href='?21'>Imperatives</a></u></td>
						<td><u><a href='?22'>Possessive Nouns</a></u></td>
						<td><u><a href='?23'>Demonstrative Adjectives</a></u></td>
						<td><u><a href='?24'>Connector then</a></u></td>
						</tr>
						<tr>
						<td><u><a href='?25'>Count and Uncontable Nouns</a></u></td>
						<td><u><a href='?26'>Alphabet</a></u></td>
						<td><u><a href='?27'>Numbers</a></u></td>						
						</tr>					
					</table>
					<br/>
					<br/>
				<table class=tablin align=center valign=middle border=0 width=80% cellpadding='20' cellspacing='30'>
					<th colspan=4>ENP Inglés V</th>
					<tr>
					<td><u><a href='?1e'>Be</a></u></td>
					<td><u><a href='?2e'>Demonstratives</a></u></td>
					<td><u><a href='?3e'>Used to</a></u></td>
					<td><u><a href='?4e'>Simple past</a></u></td>
					</tr>
					<tr>
					<td><u><a href='?5e'>Should</a></u></td>
					<td><u><a href='?6e'>Simple present</a></u></td>
					<td><u><a href='?7e'>Prepositions of time</a></u></td>
					<td><u><a href='?8e'>Compliments</a></u></td>
					</tr>
					<tr>
					<td><u><a href='?9e'>Likes and dislikes</a></u></td>
					<td><u><a href='?10e'>Conditional I</a></u></td>
					<td><u><a href='?11e'>Conditional II</a></u></td>
					<td><u><a href='?12e'>Imperatives</a></u></td>
					</tr>
					<tr>
					<td><u><a href='?13e'>Directions</a></u></td>
					<td><u><a href='?14e'>Comparatives</a></u></td>
					<td><u><a href='?15e'>Superlatives</a></u></td>
					<td><u><a href='?16e'>Phone calls</a></u></td>
					</tr>
					<tr>
					<td><u><a href='?17e'>Ordering food</a></u></td>
					<td><u><a href='?18e'>Passive voice</a></u></td>
					<td><u><a href='?19e'>Present perfect</a></u></td>
					<td><u><a href='?20e'>Simple future</a></u></td>
					</tr>
					<tr>
					<td><u><a href='?21e'>Going to</a></u></td>
					<td><u><a href='?22e'>Present for future</a></u></td>
					<td ><u><a href='?23e'>Connectors</a></u></td>
					<td ><u><a href='?24e'>Requesting</a></u></td>
					</tr>
					<tr>
					<td><u><a href='?25e'>Modal verbs I</a></u></td>
					<td><u><a href='?26e'>Modal verbs II</a></u></td>
					<td><u><a href='?27e'>Could</a></u></td>
					</tr>
					
				</table>
				<br/><br/>
				<table class=tablin align=center valign=middle border=0 width=80% cellpadding='20' cellspacing='30'>
					<th colspan=4>ENP Inglés VI</th>
					<tr>
					<td ><u><a href='?1e6'>Inferencias</a></u></td>
					<td ><u><a href='?2e6'>Lectura global</a></u></td>
					<td ><u><a href='?3e6'>Relaciones semánticas</a></u></td>
					<td ><u><a href='?4e6'>'Scanning'</a></u></td>
					</tr>
					<tr>
					<td ><u><a href='?5e6'>Lectura detallada</a></u></td>
					<td ><u><a href='?6e6'>Estrategias de lectura I</a></u></td>
					<td ><u><a href='?7e6'>Estrategias de lectura II</a></u></td>
					<td ><u><a href='?8e6'>Conectores</a></u></td>
					</tr>
				</table>";}?>
					
				
				
			</div>
			
			<?php			
				$num_paq=$_SERVER['QUERY_STRING'];
			
			if ($num_paq >=1 && $num_paq != '*'){
			            
				 header("Location:pdfp.php?p=".$num_paq."&c=".$Cuenta);
			}			
			
			if ($num_paq == '*'){
				$conexion->desconectar();
				session_destroy();
				header("Location:salirp.php");
			}
		}	
		?>
		
		
		
		<br/>
		<br/>
		  
		
	</section><!-- Este es el fin tanto de las barras laterales como de el contenido-->	
	<footer>
					<section id="footer-area">
						<section id="footer-outer-block">
								<aside class="footer-segment">
											<ul>									
												<p class="foot">Hecho en M&eacute;xico, <a href="http://www.unam.mx">Universidad Nacional Aut&oacute;noma de M&eacute;xico (UNAM)</a>, todos los derechos reservados 2009 - 2015. Esta p&aacute;gina puede ser reproducida con fines no lucrativos, siempre y cuando se cite la fuente completa y su direcci&oacute;n electr&oacute;nica, y no se mutile. De otra forma requiere permiso previo por escrito de la instituci&oacute;n.<a href="creditos.html">Cr&eacute;ditos</a></p>												
											</ul>
								</aside><!-- primer columna del footer -->		
						</section><!-- Aqui se termina el footer editable -->
					</section><!-- Fin del espacio del footer -->
			</footer>
</div><!-- Fin de la "envoltura" -->
<!--Que no le digan y que no le cuenten, toda esta página fue diseñada en su totalidad por el Ingeniero Hugo Luna alias hugix4-->
</body>
</html>