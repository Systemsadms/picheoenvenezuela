<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Articulos</title>

<link href="style/style.css" rel="stylesheet" type="text/css" />
<!-- Start css3menu.com HEAD section -->
<link rel="stylesheet" href="CSS3 Menu_files/css3menu1/style.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
<!-- End css3menu.com HEAD section -->




<style>
#noticiaypropaganda{
	width:900px;
	height:auto;
	background:#FFF;
	float:left;
}

#noticia
{
background-color:#FFF;
width: 620px;
height: auto;
float:left;

}

#propaganda
{
background-color:#fff;
width: 280px;
height: auto;
float:left;
}

#titulos
{
	width: 600px;
	height:auto;
	text-align:left;
	font-family:Arial, Helvetica, sans-serif;
	font-size:20px;
	color:#333;
	margin-top:3px;
	margin-left:5px;
}

#texto
{
background-color:#FFF;
width: 600px;
height: auto;
margin:0 auto 0 auto;
text-align:justify;
	font-family:Arial, Helvetica, sans-serif;
	font-size:14px;
	color:#333;
}

#direccion2{
	width:100%;
	height:50px;
	background:#000;
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
	color:#FFF;
	float:left;
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








		<div id="noticiaypropaganda">
        
        
		<div id="noticia">
        
        
        
        


						<?php
                            require("cnx.php");
                            $ssql 	= mysql_query("SELECT * FROM portada WHERE seccion='Imagen1'");
                            $ancla 	=  mysql_result($ssql,0,"ancla");
                            mysql_close($conexion);
                        
                            require("cnx.php");
                            $ssql = mysql_query("SELECT * FROM noticias WHERE galeria='$ancla'");	
                            $titulo		=  mysql_result($ssql,0,"titulo");
                            $contenido	=  mysql_result($ssql,0,"contenido");
                            mysql_close($conexion);
                            
                            $seccion = "Imagen1";    

                        ?>

					<br />
					<div id="titulos">El softbol… el deporte más popular de Venezuela (Opinión)</div>
					<br />
                    
                    
                    
                     <table width="400" border="0" align="center">
                      <tr>
                        <td><img  src="Img/softball.jpg" width="500" height="300"/></td>
                      </tr>
                    </table>
                    <br />
                    
                    
                    
          <div id="texto">
                  Asegurar que la pelota suave es el deporte más popular de Venezuela por encima del béisbol o fútbol es una aseveración que muchos tildarían de locura o fuera de lugar. <br /><br />
Pero si nos enfocamos en la praxis de esta hipótesis, la misma podría confirmar dicha premisa.<br /><br />
No es de ocultar que domingo a domingo, los distintos diamantes de Venezuela  se abarrotan de jóvenes y no tan jóvenes para jugar con la pelota grande.<br /><br />
La afición al softbol crece y crece. Las distintas ligas empresariales, gremiales y semi-informales lo certifican.<br /><br />
En un juego de Sureños Soy por ejemplo van más aficionados que un partido del Zulia FC. Y no es mentira afirmar esto. <br /><br />
Otro factor para certificar al softbol como uno de los deportes con mayor proyección y arraigo en el país han sido sus logros internacionales tanto en la versión femenina o masculina.<br /><br />
Unos Juegos Olímpicos, un subcampeonato mundial, y más reciente el oro centroamericano dejan claro que este deporte le ha brindado más satisfacciones que el béisbol, fútbol o el baloncesto.<br /><br />
No cabe duda que la pelota suave cada día se consolida como el nuevo "pasatiempo nacional".<br /><br />
Manuel Portillo/@Manu524<br />
Periodista Deportivo


<br /> 
</div><!--FIN DE TEXTO-->





                   

        
        
     
        
        
        </div><!--FIN DE NOTICIAS-->
       
       
       
       
       
       
       
       
       
       
       
       
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
        
        </div><!-- FIN DE PROPAGANDA-->
       
       
       
       
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
                
		</div><!--fin noticiaypropaganda -->

        
        






<br />






</div><!--FIN DE MARCO GLOBAL-->
</div><!--FIN DE MARCO UNIVERSO-->






<div id="direccion2">
<br />
<table width="900" border="0" align="center">
  <tr>
    <td align="left" width="450"><a href="login.php">Picheoenvenezuela.com Todos los derechos reservados.</a></td>
    <td align="right" width="450"><a href="http://www.systemsadms.com">Desing by: Systems Admins C.A</a></td>
  </tr>
</table>
</div><!--FIN DE DIRECCION-->







</body>
</html>