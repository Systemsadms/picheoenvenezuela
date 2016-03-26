<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Noticias</title>

<link href="style/style.css" rel="stylesheet" type="text/css" />
<!-- Start css3menu.com HEAD section -->
<link rel="stylesheet" href="CSS3 Menu_files/css3menu1/style.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
<!-- End css3menu.com HEAD section -->
<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="galeria/ajxlightbox.css" type="text/css" />
<script src="galeria/ajxlightbox.js" type="text/javascript"></script>



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
					<div id="titulos">LANZAMIENTOS DE ROMPIMIENTO QUE SE UTILIZAN EN EL SOFTBOL</div>
                    <br />
                    <br />
                    
                    
                    
                    
                    <div id="texto">
                    Los Lanzadores de softbol emplean diferentes técnicas de pitcheo, debido a que el lanzamiento es por debajo del hombro. La mecánica de lanzar se debe aprender primero, luego trabajar en la velocidad y el control, por ultimo cada lanzamiento de rompimiento.
                    <br />
Los buenos lanzadores se caracterizan por tener un buen control de sus pitcheos, dominar la recta, drop, rise, cambio y curva, todos en total hará ver la amplia variedad que posee cada lanzador.
<br /><br />
En el softbol se manejan 4 lanzamientos de rompimiento, los cuales son totalmente diferente al Beisbol, por ejemplo un lanzamiento que va hacia arriba como el Riseball, en el beisbol no existe lanzamiento que su efecto ascienda, allí encontramos lo complicado del pitcheo rápido y la particularidad del movimiento por debajo.
Los cuatro lanzamientos lo explicaremos a continuación detalladamente.
<br /><br />
<strong>DROPBALL</strong><br /><br />                
Lanzamiento rápido, que es el parecido a la recta, al tener una buena mecánica y control acudimos a aprender el lanzamiento descendiente.
<br />
1.- La función del drop es tratar que el bateador golpee la bola de rolling y así evitar batazos largos, mayormente utilizado para aquellos que tienen poder en la zona alta de bateo.
<br />
2.- El Agarre, es de la misma manera que la recta, un agarre de 4 costuras, las yemas de los dedos tocando la sutura de la pelota.
<br />
3.- El giro de la muñeca tiene que ser de caída para que la rotación sea hacia abajo.  
<br />
4.- Mantener el peso hacia adelante sin doblar la cintura, con una zancada más corta a la normal.
<br /> 
</div><!--FIN DE TEXTO-->





                    <table width="400" border="0" align="center">
                      <tr>
                        <td><img  src="arte/drop.jpg" width="550" height="200"/></td>
                      </tr>
                    </table>
                    <br />

        
        
     <div id="texto">
Lanzamiento que desciende y permite que la bola gire hacia atrás y rompa en la zona de las rodillas del bateador. Su promedio en velocidad alcanza entre 80-83 millas por hora.<br /><br />
<strong>RISEBALL</strong><br /><br />
Lanzamiento complicado de aprender en el softbol, muchas cosas juntas deben estar en sincronización para el efecto, la mecánica correcta, el agarre, el movimiento del cuerpo y el movimiento de la muñeca.<br />
1.- La función de este lanzamiento es: al momento de que el bateador haga swim la bola ya ha ascendido y sea un strike abanicado.<br />
2.- El Agarre, son dos formas conocidas de agarre.<br />
Con el dedo índice se hace un nudillo y el dedo medio en paralelo a la costura.<br />
Se crea una ¨C¨ con el dedo pulgar y el dedo índice (Igual a como se agarra un cambio en beisbol). <br />
3.- El giro de la muñeca debe ser con velocidad, el giro es similar a como se abre la manilla de una puerta.<br />
4.- Se adopta una posición diferente a las demás, el cuerpo debe inclinarse un poco hacia atrás, el peso queda en la pierna trasera, soltando la pelota a la altura de la rodilla.<br />

</div><!--FIN DE TEXTO-->   		
					


<table width="400" border="0" align="center">
                      <tr>
                        <td><img  src="arte/raise.jpg" width="550" height="200"/></td>
                      </tr>
                    </table>
                    <br />




<div id="texto">
Lanzamiento que asciende y permite que la bola gire hacia adelante y rompa en la zona de la cintura del bateador. Su promedio en velocidad alcanza las 77 millas por hora.<br /><br />
<strong>CURVA – CURVEBALL</strong><br /><br />
Poco utilizado en el softbol por su complejidad, este lo utilizan más que todos aquellos lanzadores que tienen poca velocidad en su recta. <br />
1.- Su principal función es hacer que el bateador golpee la bola de fly al cuadro y también engañar a que la pelota va a una dirección fuera de la zona de strike pero al hacer efecto cae en zona buena, engañándolo totalmente.<br />
2.- El Agarre, su agarre es de tres dedos, los dedos tocando siempre la costura, el dedo pulgar debe guardar un aire sobre la pelota.<br />
3.- La muñeca debe hacer un medio giro, hacia la izquierda para los lanzadores derechos y hacia la derecha lanzadores zurdos.<br />
4.- La zancada es normal, la técnica está en la muñeca, dejar rodar la bola suave para que haga efecto.<br />


</div><!--FIN DE TEXTO-->  



<table width="400" border="0" align="center">
                      <tr>
                        <td><img  src="arte/curva.jpg" width="550" height="200"/></td>
                      </tr>
                    </table>
                    <br />




<div id="texto">
Lanzamiento parecido al rise, con la excepción que describe un arco que confunde a los bateadores. Su promedio aproximado es de 68 millas por hora.<br /><br />
<strong>CAMBIO DE VELOCIDAD – CHANGE UP</strong><br /><br />
La mejor amiga del lanzador de softbol cuando es aprendida a soltar.<br />
1.- El cambio de velocidad comúnmente se utiliza para burlarse del bateador, preparándolos con rectas y luego tirar el changeup para confundir y sorprender.<br />
2.- El Agarre, la bola se agarra con toda la palma de la mano sin dejar espacio entre el dedo pulgar y la pelota (Totalmente arropada).<br />
3.- La muñeca va flexionada, a la hora de soltar la bola se golpea el antebrazo con la cadera a la altura del ombligo flexionando todo el antebrazo como si estuviera cargando un bebe, dejando rodar la pelota por los dedos.<br />

</div><!--FIN DE TEXTO-->  




<table width="400" border="0" align="center">
                      <tr>
                        <td><img  src="arte/cambio.jpg" width="550" height="200"/></td>
                      </tr>
                    </table>
                    <br />




<div id="texto">
Lanzamiento lento que viene en recta y rompe en la zona de strike, sacando a los bateadores de paso. Su promedio en velocidad alcanza las 60 millas por hora. <br /> <br />
Es conveniente recalcar que cuando se logra seguridad y fluidez en la mecánica de pitcheo, resulta elemental practicar y aprender cada tipo de lanzamiento, dado que un buen lanzador cuenta con la capacidad de ejecutarlos, con el propósito de dificultar el trabajo del oponente y así, destacar su desempeño en el pitcheo. En efecto, es recomendable para los principiantes de esta técnica, que no se conformen con el uso de un solo tipo de lanzamiento, una práctica constante y dedicada conduce al manejo adecuado de cada uno de ellos.

 <br /> <br />
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






<script type="text/javascript">
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
</script>
</body>
</html>