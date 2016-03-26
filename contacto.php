<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Noticias</title>

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
        
        
       
       
       
       
       
       
       
       
       
       
       
       
          
       
       
       
       
        
        
        
        <table width="900" border="0">
  <tr>
    <td width="300"><img src="Img/contactofondo.jpg" width="500" height="570" /></td>
    <td width="390">
    
    
    
              <?php
			  /*
			 if(isset($_POST["enviar"]))
			{
				
				$para = 'systemsadms@hotmail.com';
				$asunto = $_POST["asunto"];
				$desde = $_POST["desde"];
				$mensaje = "Telefono de Contacto:".$_POST["telefono"] . "<br> " . "Mensaje:" . $_POST["mensaje"];
				
				
				$cabeceras = "";
				$cabeceras = "MIME-VErsion: 1.0 \r\n";
				$cabeceras = "Content-Type: text/html; charset=iso-8859-1\r\n";
				//$cabeceras = "To: " . $_POST ["desde"] . "\r\n";
				$cabeceras .= "From: " . $_POST ["desde"] . "\r\n";
				
				mail ($para, $asunto, $mensaje, $cabeceras);
				
				
			echo "<font color='000'><b>Su mensaje ha sido enviado con exito, pronto sera atendido por uno de nuestros analistas</b></font>";
				
			}
			*/
			?>
    
    
    
    
    
    
    <?php
 if(isset($_POST['enviar']))
					{			
			$body='Hemos recibido una solicitud de contacto con los siguientes datos
			
								Telefono de Contacto			'.$_POST['telefono'].'								
								Mensaje: 						'.$_POST['mensaje'].'
								';
								
											$para="picheoenvenezuela@hotmail.com";
				
											$mensaje = $body;
					
											$asunto 	= $_POST["asunto"];
											$desde		= $_POST["email"];
											$mensaje 	= $body;
											$cabeceras = "";
											$cabeceras = "MIME-VErsion: 1.0 \r\n";
											$cabeceras	= "Content-Type: text/html; charset=iso-8859-1\r\n";
											$cabeceras = "To: " . $_POST ["email"] . "\r\n";
											$cabeceras = "From: " . $_POST ["email"] . "\r\n";    
							
							
											mail ($para, $asunto, $mensaje, $cabeceras);	
											
											echo "<font color='000'><b>Su mensaje ha sido enviado con exito, pronto sera atendido por uno de nuestros analistas</b></font>";
			}


?>
    
    
    
    <table width="200" border="0" align="center">
      <tr>
        <td align="center"><font color="#74030F" size="+2"><strong>Contactanos</strong></font></td>
      </tr>
    </table>
      <table width="350" border="0" align="center">
        <tr>
          <td align="left" bgcolor="#CCCCCC">
          <form method="post" action="#">
            <table width="330" border="0" align="center">
              <tr>
                <td width="73"><strong>Nombre y Apellido</strong></td>
                <td width="247" align="left"><input name="nombre" type="text" id="nombre" size="35" /></td>
              </tr>
              <tr>
                <td><strong>Email</strong></td>
                <td align="left"><input name="email" type="text" id="email" size="35" /></td>
              </tr>
              <tr>
                <td><strong>Telefono</strong></td>
                <td align="left"><input name="telefono" type="text" id="telefono" size="35" /></td>
              </tr>
              <tr>
                <td><strong>Asunto</strong></td>
                <td align="left"><input name="asunto" type="text" id="asunto" size="35" /></td>
              </tr>
            </table>
            <table width="330" border="0" align="center">
              <tr>
                <td><strong>Escriba su mensaje:</strong></td>
              </tr>
              <tr>
                <td align="left"><textarea name="mensaje" id="mensaje" cols="42" rows="5"></textarea></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="center">
                <input type="submit" name="enviar" id="button" value="Enviar Correo" /></td>
              </tr>
            </table>
          </form> 
          </td>
        </tr>
      </table>
      <br />
      <table width="350" border="0" align="center">
        <tr>
          <td width="152" align="center">
          <font color="#74030F">
          <strong>Horario de Atencion</strong><br />
          Lunes a Viernes<br />
          De 10:00 am a 8:00 pm <br />
          Hora de Venezuela
          </font>
          </td>
          <td width="37">&nbsp;</td>
          <td width="147" align="center" valign="top">
          <font color="#74030F">
          <strong>Atencion Telefonica</strong><br />
          +58 412 7894790<br />
          +58 212 3101971<br />

          </font>
          </td>
        </tr>
      </table>
      <br />
      <table width="200" border="0" align="center">
        <tr>
          <td align="center"><font color="#74030F"><strong>Correos Alternativos</strong></font></td>
          </tr>
        <tr>
          <td align="center"><font color="#FF6600" size="+1">info@picheoenvenezuela.com</font></td>
        </tr>
        <tr>
          <td align="center"><font color="#FF6600" size="+1">ventas@picheoenvenezuela.com</font></td>
        </tr>
      </table></td>
  </tr>
</table>
        
        
        
        
        
        
        
        
        
        
        
        
                
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