<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Picheo en Venezuela</title>
<meta name="description" content="Enterate del spftball lanzamiento rapidom actuaciones de lanzadores venezolanos en el exterior y en ñas mejores ligas de venezuela">
<meta name="keywords" content="Softball, fotos, picheo, venezuela, lanzamiento, rapido, spftball, softbol">
<meta http-equiv="Content-Type"content="text/html; charset=windows-1252">
<META NAME="revisit-after" content="14 days">
<META NAME="robots" content="index,follow">
<META NAME="distribution" content="global">

<link href="style/style.css" rel="stylesheet" type="text/css" />
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->


		<!-- Start css3menu.com HEAD section -->
	<link rel="stylesheet" href="CSS3 Menu_files/css3menu1/style.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
	<!-- End css3menu.com HEAD section -->
</head>

<body>

<div id="Marcouniverso">

<div id="MarcoGlobal">

<div id="Logo">

<img src="Img/banner.jpg" width="900" height="350" border="0" />

</div><!--Fin de logo-->



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
                    <li class="topmenu"><a href="artedepicheo.php" style="height:15px;line-height:15px;">ARTE DE PITCHEO</a></li>
                    <li class="topmenu"><a href="articulos.php" style="height:15px;line-height:15px;">ARTICULOS</a></li>
                    <li class="topmenu"><a href="historia.php" style="height:15px;line-height:15px;">HISTORIA</a></li>
                    <li class="topmenu"><a href="#" style="height:15px;line-height:15px;"><span>GALERIAS</span></a>
                      <ul>
                        <li class="subfirst"><a href="#">FOTOS</a></li>
                        <li><a href="#">VIDEOS</a></li>
                  </ul></li>
                        <li class="topmenu"><a href="#" style="height:15px;line-height:15px;">TORNEOS</a></li>
                        <li class="topmenu"><a href="#" style="height:15px;line-height:15px;">TIENDA ONLINE</a></li>
                        <li class="topmenu"><a href="#" style="height:15px;line-height:15px;">MI CUENTA</a></li>       
                   		<li class="toplast"><a href="contacto.php" style="height:15px;line-height:15px;">CONTACTANOS</a></li>
      </ul><p class="_css3m"><a href="http://css3menu.com/">menu html</a> by Css3Menu.com</p>
<!-- End css3menu.com BODY section-->
    
</div><!--FIN DE Menu-->


<div id="Separacion1"></div>
<!--<div id="Bannerppl"> BANNER PUBLICITARIO</div>-->
<div id="Separacion1"></div>

<div id="Seccion1">

<div id="Rotador">

							<?php
                            require("cnx.php");
                            $ssql 		= mysql_query("SELECT * FROM portada WHERE seccion='Imagen1'");
                            $titulo1 	=  mysql_result($ssql,0,"titulo");
							
							$ssql2 		= mysql_query("SELECT * FROM portada WHERE seccion='Imagen2'");
                            $titulo2 	=  mysql_result($ssql2,0,"titulo");
							
							$ssql3 		= mysql_query("SELECT * FROM portada WHERE seccion='Imagen3'");
                            $titulo3 	=  mysql_result($ssql3,0,"titulo");
							
							$ssql4 		= mysql_query("SELECT * FROM portada WHERE seccion='Imagen4'");
                            $titulo4 	=  mysql_result($ssql4,0,"titulo");
							
							$ssql5 		= mysql_query("SELECT * FROM portada WHERE seccion='Imagen5'");
                            $titulo5 	=  mysql_result($ssql5,0,"titulo");

                            mysql_close($conexion);  
                          
                        ?>
                        
                        
	<!-- Start WOWSlider.com BODY section  --> <!-- add to the <body> of your page-->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li>
        	<a href="portada1.php"><img src="data1/images/foto1.jpg" alt="1" title="<?php echo $titulo1; ?>" id="wows1_0"/></a>         
        </li>
		<li>
        	<a href="portada2.php"><img src="data1/images/foto2.jpg" alt="2" title="<?php echo $titulo2; ?>" id="wows1_1"/></a> 
        </li>
		<li>
        	<a href="portada3.php"><img src="data1/images/foto3.jpg" alt="3" title="<?php echo $titulo3; ?>" id="wows1_2"/></li></a>
		<li>
        	<a href="portada4.php"><img src="data1/images/foto4.jpg" alt="4" title="<?php echo $titulo4; ?>" id="wows1_3"/></a>       
        </li>
		<li>
        	<a href="portada5.php"><img src="data1/images/foto5.jpg" alt="5" title="<?php echo $titulo5; ?>" id="wows1_4"/></a>
        </li>
	</ul></div>
	<div class="ws_bullets"><div>
<!--		<a href="#" title="1"><img src="data1/tooltips/1.jpg" alt="1"/>1</a>
		<a href="#" title="2"><img src="data1/tooltips/2.jpg" alt="2"/>2</a>
		<a href="#" title="3"><img src="data1/tooltips/3.jpg" alt="3"/>3</a>
		<a href="#" title="4"><img src="data1/tooltips/4.jpg" alt="4"/>4</a>
		<a href="#" title="erick2"><img src="data1/tooltips/erick2.jpg" alt="erick2"/>5</a> -->
	</div></div><span class="wsl"><a href="http://wowslider.com/vu">image carousel</a> by WOWSlider.com v7.2</span>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->

	
    


</div><!--FIN DE ROTADOR-->



<div id="Noticias">












<!------------------------------------------COMIENZO DEL DIV PORTADA 1---------------------------------------------------->
<div id="Noticiascontenido">
	<form action="noticias.php" method="post" name="forma" > 

			<?php
                require("cnx.php");
                $ssql = mysql_query("SELECT * FROM portada WHERE seccion='portada1'");	
                $tituloportada1	 	=  mysql_result($ssql,0,"titulo");
                $contenidoportada1	=  mysql_result($ssql,0,"contenido");
                $fotoPortada1 		=  mysql_result($ssql,0,"foto");
                $anclaPortada1 		=  mysql_result($ssql,0,"ancla");
                mysql_close($conexion); 
            ?>
                  <table width="350" border="0" align="center">
                    <tr>
                      <td width="266">                      
                             <a href="javascript:document.forma.submit();" class="Estilo3"><b><?php echo $tituloportada1 ?></b></a>                              
                          <?php
                            //echo "<font color='#FC0'><b>".$tituloportada1."</b></font>";
                            echo "<br>";
                            echo $contenidoportada1;
                          ?>                      
                              <br />
                              <em>
                              <div align="right">
                                 <input type="hidden" name="seccion" value="portada1"/>   
                                  <a href="javascript:document.forma.submit();" class="Estilo3">...Leer Mas</a>                      
                              </div>
                              </em>                      
                      </td>
                      <td width="74" align="center">                    
                      <input type="image" src="noticias/portada_<?php echo $fotoPortada1;?>.jpg" width="70" height="65">                      
                      </td>
                    </tr>
                  </table>
  </form>
</div>
<!------------------------------------------FIN DEL DIV PORTADA 1---------------------------------------------------->




<div id="Separacion2"></div>





<!------------------------------------------COMIENZO DEL DIV PORTADA 2---------------------------------------------------->
<div id="Noticiascontenido">
	<form action="noticias.php" method="post" name="forma2" > 

			<?php
                require("cnx.php");
                $ssql = mysql_query("SELECT * FROM portada WHERE seccion='portada2'");	
                $tituloportada1	 	=  mysql_result($ssql,0,"titulo");
                $contenidoportada1	=  mysql_result($ssql,0,"contenido");
                $fotoPortada1 		=  mysql_result($ssql,0,"foto");
                $anclaPortada1 		=  mysql_result($ssql,0,"ancla");
                mysql_close($conexion); 
            ?>
                  <table width="350" border="0" align="center">
                    <tr>
                      <td width="266">                      
                             <a href="javascript:document.forma2.submit();" class="Estilo3"><b><?php echo $tituloportada1 ?></b></a>                              
                          <?php
                            //echo "<font color='#FC0'><b>".$tituloportada1."</b></font>";
                            echo "<br>";
                            echo $contenidoportada1;
                          ?>                      
                              <br />
                              <em>
                              <div align="right">
                                 <input type="hidden" name="seccion" value="portada2"/>   
                                  <a href="javascript:document.forma2.submit();" class="Estilo3">...Leer Mas</a>                      
                              </div>
                              </em>                      
                      </td>
                      <td width="74" align="center">                    
                      <input type="image" src="noticias/portada_<?php echo $fotoPortada1;?>.jpg" width="70" height="65">                      
                      </td>
                    </tr>
                  </table>
  </form>
</div>
<!------------------------------------------FIN DEL DIV PORTADA 2---------------------------------------------------->


<div id="Separacion2"></div>




<!------------------------------------------COMIENZO DEL DIV PORTADA 3--------------------------------------------------->
<div id="Noticiascontenido">
	<form action="noticias.php" method="post" name="forma3" > 

			<?php
                require("cnx.php");
                $ssql = mysql_query("SELECT * FROM portada WHERE seccion='portada3'");	
                $tituloportada1	 	=  mysql_result($ssql,0,"titulo");
                $contenidoportada1	=  mysql_result($ssql,0,"contenido");
                $fotoPortada1 		=  mysql_result($ssql,0,"foto");
                $anclaPortada1 		=  mysql_result($ssql,0,"ancla");
                mysql_close($conexion); 
            ?>
                  <table width="350" border="0" align="center">
                    <tr>
                      <td width="266">                      
                             <a href="javascript:document.forma3.submit();" class="Estilo3"><b><?php echo $tituloportada1 ?></b></a>                              
                          <?php
                            //echo "<font color='#FC0'><b>".$tituloportada1."</b></font>";
                            echo "<br>";
                            echo $contenidoportada1;
                          ?>                      
                              <br />
                              <em>
                              <div align="right">
                                 <input type="hidden" name="seccion" value="portada3"/>   
                                  <a href="javascript:document.forma3.submit();" class="Estilo3">...Leer Mas</a>                      
                              </div>
                              </em>                      
                      </td>
                      <td width="74" align="center">                    
                      <input type="image" src="noticias/portada_<?php echo $fotoPortada1;?>.jpg" width="70" height="65">                      
                      </td>
                    </tr>
                  </table>
  </form>
</div>
<!------------------------------------------FIN DEL DIV PORTADA 3--------------------------------------------------->



<div id="Separacion2"></div>



<!------------------------------------------COMIENZO DEL DIV PORTADA 4---------------------------------------------------->
<div id="Noticiascontenido">
	<form action="noticias.php" method="post" name="forma4" > 

			<?php
                require("cnx.php");
                $ssql = mysql_query("SELECT * FROM portada WHERE seccion='portada4'");	
                $tituloportada1	 	=  mysql_result($ssql,0,"titulo");
                $contenidoportada1	=  mysql_result($ssql,0,"contenido");
                $fotoPortada1 		=  mysql_result($ssql,0,"foto");
                $anclaPortada1 		=  mysql_result($ssql,0,"ancla");
                mysql_close($conexion); 
            ?>
                  <table width="350" border="0" align="center">
                    <tr>
                      <td width="266">                      
                             <a href="javascript:document.forma4.submit();" class="Estilo3"><b><?php echo $tituloportada1 ?></b></a>                              
                          <?php
                            //echo "<font color='#FC0'><b>".$tituloportada1."</b></font>";
                            echo "<br>";
                            echo $contenidoportada1;
                          ?>                      
                              <br />
                              <em>
                              <div align="right">
                                 <input type="hidden" name="seccion" value="portada4"/>   
                                  <a href="javascript:document.forma4.submit();" class="Estilo3">...Leer Mas</a>                      
                              </div>
                              </em>                      
                      </td>
                      <td width="74" align="center">                    
                      <input type="image" src="noticias/portada_<?php echo $fotoPortada1;?>.jpg" width="70" height="65">                      
                      </td>
                    </tr>
                  </table>
  </form>
</div>
<!------------------------------------------FIN DEL DIV PORTADA 4---------------------------------------------------->




<div id="Separacion2"></div>

<table width="350" border="0" align="center">
  <tr>
    <td align="center"><a href="#"><font color="4000"><strong>IR A NOTICIAS RECIENTES</strong></a></td>
  </tr>
</table>



</div><!--FIN DE Noticias-->

</div><!--Fin de seccion1-->

<div id="Separacion1"></div>

<div id="social">



<table width="900" border="0" align="center">
  <tr>
    <td width="188" align="center"><table width="200" border="0">
      <tr>
        <td width="49" align="center"><strong><a href="https://twitter.com/picheovesoftbol"><img src="Img/twitter.png" width="45" height="40" /></a></strong></td>
        <td width="75"><font size="-4">twitter</font></td>
        <td width="62" align="center"><strong><a href="https://es-es.facebook.com/PicheoEnVenezuela"><img src="Img/facebook.png" width="45" height="40" /></a></strong></td>
        <td width="62" align="center"><font size="-4">facebook</font></td>
      </tr>
  </table></td>
    <td width="555" align="center"><strong>Articulos Destacado</strong>s</td>
    <td width="143"><table width="200" border="0">
      <tr>
          <td align="center"><a href="https://www.youtube.com/channel/UC6d5eVtpIGEflY2tYWkud4Q"><img src="Img/youtube.png" width="45" height="40" /></a></td>
          <td><font size="-4">youtube</font></td>
          <td align="center"><a href="http://instagram.com/picheoenvenezuela"><img src="Img/instagram.png" width="45" height="40" /></a></td>
          <td align="center"><font size="-4">instagram</font></td>
        </tr>
</table></td>
  </tr>
</table>

</div><!--Fin de social-->



<div id="Separacion1"></div>
















<div id="contenido">

<!---------------------------COMIENZO DE ARTICULO1 FORMATO 3----------------------------------------->
	<div id="articulos">

			<?php
                require("cnx.php");
                $ssql = mysql_query("SELECT * FROM portada WHERE seccion='articulo1'");	
                $tituloportada1	 	=  mysql_result($ssql,0,"titulo");
                $contenidoportada1	=  mysql_result($ssql,0,"contenido");
                $fotoPortada1 		=  mysql_result($ssql,0,"foto");
                $anclaPortada1 		=  mysql_result($ssql,0,"ancla");
                mysql_close($conexion); 
            ?>
            
            <form action="noticias.php" method="post" name="forma5" > 
            
              <table width="250" border="0" align="center">
                <tr>
                  <td align="center">
                  		<b><?php echo $tituloportada1 ?></b>
                  </td>
                </tr>
                <tr>
                  <td align="center">
                  <input type="image" src="noticias/portada_<?php echo $fotoPortada1;?>.jpg" width="250" height="170">           
                  </td>
                </tr>
                <tr>
                  <td align="center">
                  <?php echo $contenidoportada1; ?>
                  </td>
                </tr>
                <tr>
                  <td align="right"><table width="70" border="0">
                    <tr>
                      <td bgcolor="#333333">
                      	<input type="hidden" name="seccion" value="articulo1"/>   
                                  <a href="javascript:document.forma5.submit();" class="Estilo3">.Leer Mas</a> 
                      </td>
                    </tr>
                  </table>       <!-- <a href="#">.</a></td> -->
                </tr>
              </table>  
  		</form>  
 </div> <!---------------------------FIN DIV CONTENIDO Y DE ARTICULO1 FORMATO 3----------------------------------------->
    
    
    
    
    
    
<div id="Noticiascontenido2">










<!------------------------------------------INICIO DE ARTICULO 2 FORMATO 2------------------------------------------------------>
<div id="Noticiascontenido2">

			<?php
                require("cnx.php");
                $ssql = mysql_query("SELECT * FROM portada WHERE seccion='articulo2'");	
                $tituloportada1	 	=  mysql_result($ssql,0,"titulo");
                $contenidoportada1	=  mysql_result($ssql,0,"contenido");
                $fotoPortada1 		=  mysql_result($ssql,0,"foto");
                $anclaPortada1 		=  mysql_result($ssql,0,"ancla");
                mysql_close($conexion); 
            ?>
<form action="noticias.php" method="post" name="forma6" > 
  <table width="300" border="0" align="center">
    <tr>
      <td width="235">
            
			    <a href="javascript:document.forma6.submit();" class="Estilo3"><b><?php echo $tituloportada1 ?></b></a> 
                <br />
             <em>  
               <?php echo $contenidoportada1; ?>
            </em>
            <input type="hidden" name="seccion" value="articulo2"/>   
                                  <div align="right">  <a href="javascript:document.forma6.submit();" class="Estilo3">...Leer Mas</a> </div>    
        </td>
      <td width="55" align="center">
      <input type="image" src="noticias/portada_<?php echo $fotoPortada1;?>.jpg" width="50" height="50">      
      </td>
    </tr>
  </table>
  </form>
</div>
<!------------------------------------------FIN DE ARTICULO 2 FORMATO 2------------------------------------------------------>




<div id="Separacion2"></div>




<!------------------------------------------INICIO DE ARTICULO 3 FORMATO 2------------------------------------------------------>
<div id="Noticiascontenido2">

			<?php
                require("cnx.php");
                $ssql = mysql_query("SELECT * FROM portada WHERE seccion='articulo3'");	
                $tituloportada1	 	=  mysql_result($ssql,0,"titulo");
                $contenidoportada1	=  mysql_result($ssql,0,"contenido");
                $fotoPortada1 		=  mysql_result($ssql,0,"foto");
                $anclaPortada1 		=  mysql_result($ssql,0,"ancla");
                mysql_close($conexion); 
            ?>
<form action="noticias.php" method="post" name="forma7" > 
  <table width="300" border="0" align="center">
    <tr>
      <td width="235">
            
			    <a href="javascript:document.forma7.submit();" class="Estilo3"><b><?php echo $tituloportada1 ?></b></a> 
                <br />
             <em>  
               <?php echo $contenidoportada1; ?>
            </em>
            <input type="hidden" name="seccion" value="articulo3"/>   
                                <div align="right">    <a href="javascript:document.forma7.submit();" class="Estilo3">...Leer Mas</a> </div>    
        </td>
      <td width="55" align="center">
      <input type="image" src="noticias/portada_<?php echo $fotoPortada1;?>.jpg" width="50" height="50">      
      </td>
    </tr>
  </table>
  </form>
</div>
<!------------------------------------------FIN DE ARTICULO 3 FORMATO 2------------------------------------------------------>




<div id="Separacion2"></div>





<!------------------------------------------INICIO DE ARTICULO 4 FORMATO 2------------------------------------------------------>
<div id="Noticiascontenido2">

			<?php
                require("cnx.php");
                $ssql = mysql_query("SELECT * FROM portada WHERE seccion='articulo4'");	
                $tituloportada1	 	=  mysql_result($ssql,0,"titulo");
                $contenidoportada1	=  mysql_result($ssql,0,"contenido");
                $fotoPortada1 		=  mysql_result($ssql,0,"foto");
                $anclaPortada1 		=  mysql_result($ssql,0,"ancla");
                mysql_close($conexion); 
            ?>
<form action="noticias.php" method="post" name="forma8" > 
  <table width="300" border="0" align="center">
    <tr>
      <td width="235">
            
			    <a href="javascript:document.forma8.submit();" class="Estilo3"><b><?php echo $tituloportada1 ?></b></a> 
                <br />
             <em>  
               <?php echo $contenidoportada1; ?>
            </em>
            <input type="hidden" name="seccion" value="articulo4"/>   
                                  <div align="right">  <a href="javascript:document.forma8.submit();" class="Estilo3">...Leer Mas</a>  </div>   
        </td>
      <td width="55" align="center">
      <input type="image" src="noticias/portada_<?php echo $fotoPortada1;?>.jpg" width="50" height="50">      
      </td>
    </tr>
  </table>
  </form>
</div>
<!------------------------------------------FIN DE ARTICULO 4 FORMATO 2------------------------------------------------------>





<div id="Separacion2"></div>



<!------------------------------------------INICIO DE ARTICULO 5 FORMATO 2------------------------------------------------------>
<div id="Noticiascontenido2">

			<?php
                require("cnx.php");
                $ssql = mysql_query("SELECT * FROM portada WHERE seccion='articulo5'");	
                $tituloportada1	 	=  mysql_result($ssql,0,"titulo");
                $contenidoportada1	=  mysql_result($ssql,0,"contenido");
                $fotoPortada1 		=  mysql_result($ssql,0,"foto");
                $anclaPortada1 		=  mysql_result($ssql,0,"ancla");
                mysql_close($conexion); 
            ?>
<form action="noticias.php" method="post" name="forma9" > 
  <table width="300" border="0" align="center">
    <tr>
      <td width="235">
            
			    <a href="javascript:document.forma9.submit();" class="Estilo3"><b><?php echo $tituloportada1 ?></b></a> 
                <br />
             <em>  
               <?php echo $contenidoportada1; ?>
            </em>
            <input type="hidden" name="seccion" value="articulo5"/>   
                                   <div align="right"><a href="javascript:document.forma9.submit();" class="Estilo3">...Leer Mas</a>     </div>
        </td>
      <td width="55" align="center">
      <input type="image" src="noticias/portada_<?php echo $fotoPortada1;?>.jpg" width="50" height="50">      
      </td>
    </tr>
  </table>
  </form>
</div>
<!------------------------------------------FIN DE ARTICULO 5 FORMATO 2------------------------------------------------------>








</div><!--Fin de noticias contenido2-->




<div id="articulos">

				<?php
                require("cnx.php");
                $ssql = mysql_query("SELECT * FROM portada WHERE seccion='articulo6'");	
                $tituloportada1	 	=  mysql_result($ssql,0,"titulo");
                $contenidoportada1	=  mysql_result($ssql,0,"contenido");
                $fotoPortada1 		=  mysql_result($ssql,0,"foto");
                $anclaPortada1 		=  mysql_result($ssql,0,"ancla");
                mysql_close($conexion); 
            ?>
  <form action="noticias.php" method="post" name="forma10" > 
  <table width="250" border="0" align="center">
    <tr>
      <td align="center"><b><?php echo $tituloportada1 ?></b></td>
    </tr>
    <tr>
      <td align="center">
      <input type="image" src="noticias/portada_<?php echo $fotoPortada1;?>.jpg" width="250" height="170">
      </td>
    </tr>
    <tr>
      <td align="center">
      		 <?php echo $contenidoportada1; ?>
      </td>
    </tr>
    <tr>
      <td align="right"><table width="70" border="0">
        <tr>
          <td bgcolor="#333333">
                   <input type="hidden" name="seccion" value="articulo6"/>   
                    <a href="javascript:document.forma10.submit();" class="Estilo3">Leer Mas</a> 
          </td>
        </tr>
      </table></td>
    </tr>
  </table>
  </form>

</div> <!---------------------------FIN DIV ARTICULOS Y DE ARTICULO1 FORMATO 3----------------------------------------->



</div><!--Fin de contenido-->





















<div id="Separacion1"></div>
<div id="social">
<table width="900" border="0" align="center">
  <tr>
    <td width="188" align="center"><table width="250" border="0">
      <tr>
        <td width="49" align="center"><strong><img src="Img/capitalinos.jpg" width="50" height="45" /></strong></td>
        <td width="75"><strong><img src="Img/tiuna.jpg" width="50" height="45" /></strong></td>
        <td width="62" align="center"><strong><img src="Img/patriotas.jpg" width="50" height="45" /></strong></td>
        <td width="62" align="center"><strong><img src="Img/lanceros.jpg" width="75" height="45" /></strong></td>
        <td width="62" align="center"><strong><img src="Img/socios.jpg" width="50" height="45" /></strong></td>
      </tr>
  </table></td>
    <td width="555" align="center"><strong>Videos Destacado</strong>s</td>
    <td width="143"><table width="250" border="0">
      <tr>
        <td width="49" align="center"><strong><img src="Img/surenos.jpg" width="50" height="45" /></strong></td>
        <td width="75"><strong><img src="Img/caciques.jpg" width="70" height="45" /></strong></td>
        <td width="62" align="center"><strong><img src="Img/industriales.jpg" width="75" height="45" /></strong></td>
        <td width="62" align="center"><strong><img src="Img/bravos.jpg" width="75" height="45" /></strong></td>
        <td width="62" align="center">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
<div id="Separacion1"></div>






















<div id="contenido">



<div id="articulos">
  <table width="250" border="0" align="center">
    <tr>
      <td align="center"><b>FINAL LVS 2014 (Sureños vs Socios)</b></td>
    </tr>
    <tr>
      <td align="center"><a href="#">
     <iframe width="250" height="170" src="//www.youtube.com/embed/NHEXzhvPU3A" frameborder="0" allowfullscreen></iframe> 
    
      
      </a></td>
    </tr>
    <tr>
      <td align="center">Ultimo encuentro da la final de la Liga Venezolana de Softball (LVS) 2014. Sureños vs Socios de Vargas</td>
    </tr>
    <tr>
      <td align="right"><table width="70" border="0">
        <tr>
          <td bgcolor="#333333"><a href="#">Leer Mas</a></td>
        </tr>
      </table></td>
    </tr>
  </table>
</div>





<div id="articulos">
  <table width="250" border="0" align="center">
    <tr>
      <td align="center"><b>Ramon Jones (LVS 2014)</b></td>
    </tr>
    <tr>
      <td align="center"><a href="#">
     <iframe width="250" height="170" src="//www.youtube.com/embed/nhe7ubpD734" frameborder="0" allowfullscreen></iframe> 
    
      
      </a></td>
    </tr>
    <tr>
      <td align="center">Ramon Jones lanzador que encabeza el rankin de lanzadores Venezolanos.</td>
    </tr>
    <tr>
      <td align="right"><table width="70" border="0">
        <tr>
          <td bgcolor="#333333"><a href="#">Leer Mas</a></td>
        </tr>
      </table>        <a href="#">.</a></td>
    </tr>
  </table>
</div>
















<div id="articulos">
  <table width="250" border="0" align="center">
    <tr>
      <td align="center"><b>Tony Mancha Lanzador USA</b></td>
    </tr>
    <tr>
      <td align="center"><a href="#">
      <iframe width="250" height="170" src="//www.youtube.com/embed/EQ6MrV6NFyw" frameborder="0" allowfullscreen></iframe>

      </a></td>
    </tr>
    <tr>
      <td align="center">Tony Mandha lanzador de la seleccion de Estados Unidos.</td>
    </tr>
    <tr>
      <td align="right"><table width="70" border="0">
        <tr>
          <td bgcolor="#333333"><a href="#">Leer Mas</a></td>
        </tr>
      </table>        <a href="#">.</a></td>
    </tr>
  </table>
</div>



</div><!--Fin de contenido-->

































<div id="Separacion1"></div>


</div><!--Fin de marcoglobal-->
</div><!--Fin de Marcouniverso-->

<div id="direccion">
<br />
<table width="900" border="0" align="center">
  <tr>
    <td align="left" width="450"><a href="login.php">Picheoenvenezuela.com Todos los derechos reservados.</a></td>
    <td align="right" width="450">Desing by: <a href="http://www.systemsadms.com">Systems Admins C.A</a></td>
  </tr>
</table>


</div><!--FIN DE DIRECCION-->


</body>
</html>