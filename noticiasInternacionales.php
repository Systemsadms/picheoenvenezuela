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

<style>
#noticiaypropaganda{
	width:900px;
	height:auto;
	background:#FFF;
}

#noticia
{
background-color:#FFF;
width: 613px;
height: auto;
float:left;
}
#noticiasmarco
{
background-color:#FFF;
width: 613px;
height: auto;
float:left;
}
#noticiaautodesplagable
{
	float:left;
	margin-left: 18px;
	margin-bottom: 50px;
}

#titulonoticia
{
	width: 280px;
	height:auto;
	text-align:left;
	font-family:Arial, Helvetica, sans-serif;
	font-size:20px;
	color:#333;
	margin-top:3px;
}

#propaganda
{
background-color:#FFF;
width: 280px;
height: auto;
float:left;
}

a:link{
	color:#333;	
	font-family:Arial, Helvetica, sans-serif;
	font-size:14px;
	color:#333;	
}
a:visited{
	color:#333;
	font-family:Arial, Helvetica, sans-serif;
	font-size:14px;
	color:#333;	
}
a:hover{
	color:#333;
	text-decoration:line-through;
	font-family:Arial, Helvetica, sans-serif;
	font-size:14px;
	color:#333;	
}
#direccion{
	margin:0 auto 0 auto;
	width:912px;
	height:50px;
	background:#000;
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
	color:#FFF;	
	}		

</style>

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




<div id="contenidoauto">


        <div id="noticiaypropaganda">
        <table width="900" border="0">
        	<tr>
            	<td>
                    <div id="noticia">
                    
                    
                    
                    
                    
                    
   				
                <br /><br />
                
                <?php

				include ("cnx.php");					
				
				$consulta = "SELECT * FROM noticias WHERE tipo='Internacionales';";
				$hacerconsulta=mysql_query ($consulta,$conexion);
				
				if (mysql_num_rows($hacerconsulta)>=1)
				{
				
				echo "<div id='noticiasmarco'>";				
				
				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				
				while ($reg)
				{				
				echo "
				<div id='noticiaautodesplagable'>				
				
				<form action='noticias.php' method='post' name='forma".$reg[0]."' >
					 <div>					
						 <input type='image' src='noticias/portada_".$reg[4].".jpg' width='280' height='180'>
					 </div>				 
					  <div id='titulonoticia'>
						<input type='hidden' name='ancla2' value='".$reg[4]."'/>   
									  <a href='javascript:document.forma".$reg[0].".submit();' class='Estilo3'><b>".$reg[2]."</b></a> 
					 </div>
				</form>

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
                
                
                
                
                
            
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    </div><!--FIN DEL DIV NOTICIAYPROPAGANDA QUE ESTA EN HEAD -->
                    <div id="propaganda">
                    
                              <br />
                            <img src="publicidad/bannerstefftd.gif" width="280" height="50" />        
                            <br /> <br />
                            
                            <!--TWITTER-->
                                           <a class="twitter-timeline"  href="https://twitter.com/PicheoVeSoftbol" data-widget-id="552164237964218368">Tweets por el @PicheoVeSoftbol.</a>
                                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>          
                             <!--FIN TWITTER--> 
                            
                            <br /><br />
                            
                            <img src="publicidad/propasystems.jpg" width="280" height="350" />
        
                    
                    </div><!--FIN DE PROPAGANDA-->
				</td>
            </tr>
        </table>



 
  
  















































































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
</div>






<script type="text/javascript">
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
</script>
</body>
</html>