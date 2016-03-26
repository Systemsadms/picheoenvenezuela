<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link href="style/style.css" rel="stylesheet" type="text/css" />


<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
</head>
<body>




<div id="contenidoauto">
<br />
<div id="noticiasContendio">




<div id="noticiasArcordion">

Hola mundo
<br />
HOLA MUDNO
<br />
HOLA MUDNO
<br />
HOLA MUDNO
<br />
HOLA MUDNO
<br />
HOLA MUDNO
<br />
HOLA MUDNO
<br />
HOLA MUDNO
<br />
HOLA MUDNO
<br />
HOLA MUDNO
<br />
HOLA MUDNO
<br />
HOLA MUDNO
<br />
HOLA MUDNO
<br />
HOLA MUDNO

 </div> 




  <?php

	include ("cnx.php");					
				
				$consulta = "SELECT * FROM galeria;";
				$hacerconsulta=mysql_query ($consulta,$conexion);
				
				if (mysql_num_rows($hacerconsulta)>=1)
				{
				
				echo "<div id='galeria'>";				
				
				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				
				while ($reg)
				{				
				echo "<div id='galeria'>				
				<div class='AJXLightboxOCRJCfB'>
				 <div>
				 <a href='galeria/guia_".$reg[1].".jpg' rel='ajxlightbox'><img src='galeria/guia_".$reg[1].".jpg' width='85' height='85'/></a></div>
				</div>

				</div>";
							

				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				
				}
				echo "</div>";
				mysql_close($conexion);
				
				echo "<br>";
				

				}
				else
				{
					echo "No hay fotos cargadas a la galeria";
					echo "<br>";
				}
				
				?>
                
                
</div><!--FIN DE NOTICIASCONTENIDO-->
<br />
Continuacion de Noticias
<br />
</div><!--FIN DE CONTENIDOAUTO-->












<script type="text/javascript">
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
</script>
</body>
</html>