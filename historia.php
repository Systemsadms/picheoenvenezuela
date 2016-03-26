<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Historia</title>

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
					<div id="titulos">KEN SOLLOWAY INTRODUJO PITCHEO TIPO ¨MOLINO¨</div>
					<br />
                    
                    
                    
                     <table width="400" border="0" align="center">
                      <tr>
                        <td><img  src="Img/zulia.jpg" width="500" height="300"/></td>
                      </tr>
                    </table>
                    <br />
                    
                    
                    
          <div id="texto">
                    En la gráfica de izquierda a derecha: Edgalo, Rafael Montiel, David Romero, Rosendo Bracho, Fernando Montiel y Arealdo Bracho; Quinteto de lanzadores que se nutrieron de los norteamericanos para aprender a lanzar tipo molino.<br /><br /> 
Eran aquellos tiempos cuando transnacionales como Creole, Shell, Mene Grande, Sunoil, Texaco, Chevron y otras contratistas como la Hallibourton, entre otros, sumaban buena cantidad de ingenieros, técnicos, perforadores, aforadores y trabajadores especializados en diferentes áreas provenientes de Estados Unidos.<br /><br /> 
Fueron muchos los ciudadanos norteamericanos, gozando de juventud, que traían experiencias en softbol y béisbol que se unieron al movimiento softbolistico local y cosa igual sucedía con norteamericanos llegados a las zonas de Falcón y oriente del país.<br /><br /> 
De los que hicieron actividad en el Zulia, guardamos gratos recuerdos quizás del mejor lanzador de softbol que ha visitado el Zulia como lo fue Ken Solloway, corpulento empleado de la Hallibourton que, entre otras cosas, tuvo más de diez partidos ponchando a 15 o más bateadores y durante el primer campeonato nacional celebrado en Barquisimeto en 1958 lidero todos los departamentos de lanzadores llevando al Zulia al campeonato.<br /><br /> 
Pero así como Solloway, también podríamos mencionar a otros como Arthur Deleon, Edward Smith, de las empresas Mene Grande y Creole, respectivamente, y Frank Koch, que jugo para los equipos Universidad del Zulia y Policía de Maracaibo. Este último lanzador integraba el grupo de voluntarios organizado por el entonces Presidente de los Estados Unidos, John F. Kennedy, conocido como Cuerpo de Paz en la década del setenta.<br /><br /> 
La presencia de estos norteamericanos influyo mucho, por cuanto el pitcheo venezolano era totalmente al estilo Hamaquita, donde destacaban, Guillermo Gil, Checo Méndez, Mario Tigrera y Ramón Darío Urdaneta.<br /><br /> 
Pero posteriormente vendría la renovación en el pitcheo y muchos lanzadores de entonces como Helimenas Romero, llevado posteriormente a Caracas; Guillermo Sánchez, Edgalo Montiel, Tito Bracho, David Romero, Rosendo Bracho, Rafael Montiel y hasta veteranos como Ali Meza y Adelso Sánchez, para nombrar solo algunos y quienes, inspirados por aquellos norteamericanos, aprendieron a lanzar estilo molino.<br /><br /> 

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