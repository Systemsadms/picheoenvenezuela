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

<link rel="stylesheet" href="galeria/ajxlightbox.css" type="text/css" />
<script src="galeria/ajxlightbox.js" type="text/javascript"></script>
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
                        <li class="subfirst"><a href="noticiasNacionales.php">NACIONALES</a></li>
                        <li><a href="noticiasInternacionales.php">INTERNACIONALES</a></li>
                    </ul></li>
                    <li class="topmenu"><a href="#" style="height:15px;line-height:15px;"><span>LANZADORES</span></a>
                    <ul>
                    <li class="subfirst"><a href="#">VENEZOLANOS</a></li>
                        <li><a href="#">EXTRANJEROS</a></li>
                    </ul></li>
                    <li class="topmenu"><a href="#" style="height:15px;line-height:15px;">ARTE DE PITCHEO</a></li>
                    <li class="topmenu"><a href="#" style="height:15px;line-height:15px;">TORNEOS</a></li>
                    <li class="topmenu"><a href="#" style="height:15px;line-height:15px;">HISTORIA</a></li>
                    <li class="topmenu"><a href="#" style="height:15px;line-height:15px;"><span>GALERIAS</span></a>
                      <ul>
                        <li class="subfirst"><a href="#">FOTOS</a></li>
                        <li><a href="#">VIDEOS</a></li>
                  </ul></li>
                        <li class="topmenu"><a href="#" style="height:15px;line-height:15px;">COMUNIDAD</a></li>
                        <li class="topmenu"><a href="#" style="height:15px;line-height:15px;">TIENDA ONLINE</a></li>
                        <li class="topmenu"><a href="#" style="height:15px;line-height:15px;">MI CUENTA</a></li>       
                   		<li class="toplast"><a href="#" style="height:15px;line-height:15px;">CONTACTANOS</a></li>
      </ul><p class="_css3m"><a href="http://css3menu.com/">menu html</a> by Css3Menu.com</p>
<!-- End css3menu.com BODY section-->
    
</div><!--FIN DE Menu-->






<div id="Separacion1"></div>




<div id="contenidoauto">




<br />



<div id="contenidoGeneral">




<table width="800" align="center" border="0">
	<tr>
    	<td>


  
<?php
 $titulo = $_POST['titulo'];
 $fotos	 = $_POST['galeria'];
?>  



<table width="800" border="0" align="center">
  <tr>
    <td align="center"><h2><?php echo $titulo;?></h2></td>
  </tr>
</table>

<br />





<?php

	include ("cnx.php");					
				
				$consulta = "SELECT * FROM galeria WHERE galeria='$fotos';";
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











        <td>
	<tr>
</table>





<?php
	$seccion = $_POST['seccion'];
	
	if ($seccion=="Imagen1")
		{
			$retorno = "portada1.php";
		}
		else if ($seccion=="Imagen2")
		{
			$retorno = "portada2.php";
		}
		else if ($seccion=="Imagen3")
		{
			$retorno = "portada3.php";
		}
		else if ($seccion=="Imagen4")
		{
			$retorno = "portada4.php";
		}
		else if ($seccion=="Imagen5")
		{
			$retorno = "portada5.php";
		}

?>

<br />

<table width="200" border="0" align="center">
  <tr>
    <td>
    	<form method="post" action="<?php echo $retorno;?>">
        <input type="hidden" name="seccion" value="<?php echo $seccion;?>"/>
        <input type='image' src='Img/seguirleyendo.png' width='220' height='75'>
    </form>
    </td>
  </tr>
</table>















































</div><!--FIN DE CONTENIDO GENERAL-->





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