<?php
include('secure_paq.php');
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
		<link rel="stylesheet" href="../css/hugixR.css" type="text/css" media="screen" />
		<link rel="stylesheet" type="text/css" href="print.css" media="print" />
		 
	 <div id="loop"><img border="0" alt="Universidad Nacional Aut&oacute;noma de M&eacute;xico, Coordinaci&oacute;n General de Lenguas" src="../images/CGLh1a.png"  width="1200px" height="10%" align="center" border="0" usemap="#CGLh"/></a>
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
			if(isset($_GET[p])&&isset($_GET[c])){
				$paq_num=$_GET[p];
				$Cuenta=$_GET[c];
				if($paq_num=='1' || $paq_num=='3'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/PD910ToBe.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='2'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo" <embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/PD5PersonalPronouns.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='10'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf3/PD1PrSiHave.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='4'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/Nationalities.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='5'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/PD6PossessiveAdj.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='6' || $paq_num=='9'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/PD14Whquestions.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='7'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/PD2Articles.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='8'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/PDFamilyR.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='11'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/PD11PrSilikedislike.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='12'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/PD13PrSidailyroutines.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='13'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/DirectionsAndPrepositions.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='14'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/Prepositions of place.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='15'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/Prepositions of time.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='16'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/ThereIsThereAre.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='17'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/Quantifiers.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='18'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/PresentContinuous.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='19'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/CanCant.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='20'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/Simple past.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='21'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/PD8Imperatives.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='22'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/PD7PossessiveNouns.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='23'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/PD4DdemonsAdj.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='24'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/Connector then.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='25'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/CountAndUncount.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='26'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/PD1Alphabet.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='27'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/PD3OrCarNumbers.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='28'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf3/GoingTo.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='29'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/PDPastTense.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
								
				if($paq_num=='1c'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/PD910ToBe.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='2c'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/PD13PrSidailyroutines.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='3c'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf5/PD4y5ComparSuperlatives.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='4c'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/PDPastTense.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='5c'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf3/PD2PaSitherewaswere.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='6c'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf3/PD4PaSidescriptions.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='7c'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf5/Connectors.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='8c'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf3/PD5Conjunctions.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='9c'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf6/Conectores causa consecuencia.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='10c'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf3/GoingToCN.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='11c'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf3/simpleF.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='12c'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf5/PDUsedTo.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='13c'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf3/PastContinuous.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='14c'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf5/PD3MoVeCould.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='15c'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf5/Modal verbs.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='16c'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf3/Obligations.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='17c'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf5/Present perfect.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}				
				
				
				if($paq_num=='1e'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/PD910ToBe.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='2e'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/PD4DdemonsAdj.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='3e'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf5/PDUsedTo.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='4e'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf3/PD4PaSidescriptions.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='5e'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf5/Modal%20verbs.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='6e'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/PD13PrSidailyroutines.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='7e'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/Prepositions of place.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='8e'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf5/PD9ClothesCompliments.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='9e'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/PD11PrSilikedislike.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='10e'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf5/1stConditional.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='11e'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf5/Second conditional.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='12e'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/PD8Imperatives.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='13e'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdfs1y4/DirectionsAndPrepositions.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='14e'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf5/PD4Comparatives.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='15e'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf5/PD5Superlatives.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='16e'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf5/PD6PhoneCalls.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='17e'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf5/RequestingFood.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='18e'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf5/Passive voice.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='19e'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf5/Present perfect.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='20e'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf5/PD7FutureSimple.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='21e'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf3/GoingTo.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='22e'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf3/PresentContinuousFuture.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='23e'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf5/Connectors.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='24e'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf5/Requesting.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='25e'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf5/Modal verbs.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='26e'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf3/Obligations.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='27e'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf5/PD3MoVeCould.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}				
				
				if($paq_num=='1e6'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf6/PD4Inferencias.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='2e6'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf6/PD2LecturaGlobal.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				if($paq_num=='3e6'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf6/PD3RelSemanticas.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='4e6'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf6/PD5SignScanning.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='5e6'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf6/PD6LecturaDetallada.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='6e6'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf6/Reading strategies I.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='7e6'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf6/Reading strategies II.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='8e6'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.hugix.comli.com/Pqt/pdf6/Conectores causa consecuencia.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='1q'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.cgl-unam.comze.com/docs/Quiz1.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='2q'){					
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.cgl-unam.comze.com/docs/Quiz2.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				if($paq_num=='3q'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.cgl-unam.comze.com/docs/Quiz3.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='4q'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.cgl-unam.comze.com/docs/Quiz4.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				if($paq_num=='5q'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.cgl-unam.comze.com/docs/Quiz5.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='6q'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.cgl-unam.comze.com/docs/Quiz6.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				if($paq_num=='7q'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.cgl-unam.comze.com/docs/Quiz7.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
				
				if($paq_num=='8q'){
					$sql='update BDalumnos2014 set p'.$paq_num.'=p'.$paq_num.'+1 where Cuenta='.$Cuenta;
					$sql=$conexion->consulta($sql);	
					echo "<embed src='http://www.cgl-unam.comze.com/docs/Quiz8.pdf#toolbar=0&navpanes=0&statusbar=0&messages=0' width='95%' height='490'></embed>";
				}
			}
			else{
				header("Location:paqt.php");
			}
		
		$paq_num=$_GET[p];
		$Cuenta=$_GET[c];
		echo "<br/>
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
		
		<div class=tabla_centro><table class=tablin align=center valign=middle border=0 width=100% cellpadding='10'>
		<td><u><a href='javascript:history.back()'> Regresar </a></u></td>
		<td><u><a href='paqt.php'>Paquetes Didácticos</a></u></td>
		<td><u><a href='salirp.php'>Cerrar sesión</a></u></td>
		</table>
		<p><font size='1'>Si usas Internet Explorer, asegúrate de desbloquear el contenido ActiveX para poder visualizar correctamente el sitio</font></p>
		</div>
			  ";//<a href='Intermedio2014.php?c=$Cuenta'>Regresar a Resultados</a>
			  
		?>
			</table>
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
<!--Que no le digan y que no le cuenten, toda esta página fue diseñada en su totalidad por el Ingeniero Hugo Luna alias hugix4-->
</body>
</html>