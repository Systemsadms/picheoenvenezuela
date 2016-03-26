<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Noticias Nacionales</title>

<link href="style/style.css" rel="stylesheet" type="text/css" />
<!-- Start css3menu.com HEAD section -->
<link rel="stylesheet" href="CSS3 Menu_files/css3menu1/style.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
<!-- End css3menu.com HEAD section -->
<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
</head>


<body>
<div id="Marcouniverso">
<div id="MarcoGlobal">

    <div id="Logo">    
    <img src="Img/banner.jpg" width="900" height="350" />
    </div><!--FIN DE Banner-->
    
    
    
    
    
    
<div id="Menu">
                <!-- Start css3menu.com BODY section -->
                <ul id="css3menu1" class="topmenu">
                <input type="checkbox" id="css3menu-switcher" class="switchbox"><label onclick="" class="switch" for="css3menu-switcher"></label>	<li class="topfirst"><a href="index.php" style="height:15px;line-height:15px;">HOME</a></li>
                    <li class="topmenu"><a href="#" style="height:15px;line-height:15px;"><span>NOTICIAS</span></a>
                    <ul>
                        <li class="subfirst"><a href="#">NACIONALES</a></li>
                        <li><a href="#">INTERNACIONALES</a></li>
                    </ul></li>
                    <li class="topmenu"><a href="lanzadores.pgp" style="height:15px;line-height:15px;"><span>LANZADORES</span></a>
                    <ul>
                    <li class="subfirst"><a href="#">VENEZOLANOS</a></li>
                        <li><a href="#">EXTRANJEROS</a></li>
                    </ul></li>
                    <li class="topmenu"><a href="artedepicheo.php" style="height:15px;line-height:15px;">ARTE DE PITCHEO</a></li>
                    <li class="topmenu"><a href="#" style="height:15px;line-height:15px;">TORNEOS</a></li>
                    <li class="topmenu"><a href="#" style="height:15px;line-height:15px;">HISTORIA</a></li>
                    <li class="topmenu"><a href="#" style="height:15px;line-height:15px;"><span>MULTIMEDIA</span></a>
                      <ul>
                        <li class="subfirst"><a href="#">FOTOS</a></li>
                        <li><a href="#">VIDEOS</a></li>
                  </ul></li>
                        <li class="topmenu"><a href="#" style="height:15px;line-height:15px;">COMUNIDAD</a></li>
                        <li class="topmenu"><a href="#" style="height:15px;line-height:15px;">TIENDA ONLINE</a></li>
                        <li class="topmenu"><a href="#" style="height:15px;line-height:15px;">MI CUENTA</a></li>       
                    <li class="toplast"><a href="contacto.php" style="height:15px;line-height:15px;">CONTACTANOS</a></li>
      </ul><p class="_css3m"><a href="http://css3menu.com/">menu html</a> by Css3Menu.com</p>
<!-- End css3menu.com BODY section-->
    
</div><!--FIN DE Menu-->






<div id="Separacion1"></div>




<div id="contenidoauto">




<br />



<div id="noticiasContendio">


 
  
  







<?php
	include ("cnx.php");					
				
				$consulta = "SELECT * FROM noticias;";
				$hacerconsulta=mysql_query ($consulta,$conexion);
				
				if (mysql_num_rows($hacerconsulta)>=1)
				{
				
				echo " <div id='Accordion1' class='Accordion' tabindex='0'>";
				
				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				
				while ($reg)
				{				
				
				
				echo "
				
				
				 <div class='AccordionPanel'>
				  <div class='AccordionPanelTab'>".$reg[2]."</div>
				  <div class='AccordionPanelContent'> 
				  ".$reg[3]."
				  
				  </div>
				  </div>				
				";
							

				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				
				}
				echo "</div>";
				mysql_close($conexion);
				
				echo "<br>";
				

				}
				else
				{
					echo "No hay Noticias Cargadas";
					echo "<br>";
				}
				
				?>





































































</div><!--FIN DE NOTICIASCONTENIDO-->





<br />
<br />



</div><!--FIN DE CONTENIDOAUTO-->


</div><!--FIN DE MARCO GLOBAL-->
</div><!--FIN DE MARCO UNIVERSO-->






<div id="direccion">
<br />
<table width="900" border="0" align="center">
  <tr>
    <td align="left" width="450"><a href="login.php">Picheoenvenezuela.com Todos los derechos reservados.</a></td>
    <td align="right" width="450"><a href="http://www.systemsadms.com">Desing by: Systems Admins C.A</a></td>
  </tr>
</table>
</div><!--FIN DE DIRECCION-->






<script type="text/javascript">
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
</script>
</body>
</html>