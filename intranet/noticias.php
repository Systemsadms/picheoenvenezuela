<?php
session_start();
if ($_SESSION['admin'] == 'picheoenvz')
{
include ("cnx.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="estilo.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="menu/ajxmenu.css" type="text/css" />
</head>

<body>


<div id="Marcocosmo">
<div id="MarcoGlobal">



                <div id="modulotop">
                
                	<div id="logo"></div>
                    <div id="titulo">
                    Sistema de Control de Usuarios, Tracking y Envios.
                    <br /><br />
                    CUTE v2.0
                    </div>
                
                
                </div><!--FIN DE modulotop-->
                
                
                <div id="menu">
                
 <div class="AJXMenuWJcNLQA"><!-- AJXFILE:menu/ajxmenu.css -->
 <div class="ajxmw1">
  <div class="ajxmw2">




					 <ul>
					 <li class="tfirst"><a href="home.php">HOME</a></li>
                     <li><a href="portada.php">PORTADA</a></li>                   
                     <li><a href="noticias.php">NOTICAS</a></li>                     
                     <li><a href="no.php">TIENDA</a></li>                     
                     <li><a href="pagos.php">PAGOS</a></li>
                     <li><a href="galeria.php">GALERIA</a></li>
                     <li><a href="clientes.php">CLIENTES</a></li>
                     <li><a href="destruir.php"><font color="#0000FF">CERRAR EDITOR</font></a></li>
					</ul>
                    
                    
                    
                    
  </div>
 </div>
 <br />
 
 
 
 
 
 
</div>
                                    
</div><!--FIN DE MARCO menu-->
                
                
                
                
                
                <div id="sparacion"></div><!--FIN DE  sparacion-->
                
                
                
                
                
                
                <div id="contenido">
                  <table width="530" border="0" align="center">
                    <tr>
                      <td width="433" align="center"><em><strong><font color="#999999">Sistema de Control de Usuarios y Carga de Tracking. v2.0</font></strong></em></td>
                    </tr>
                  </table>
                  
                   <br /><br />
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
     <?php

                                 if (isset($_POST['cargar']))
								 {																
										$tipo		=	$_POST['tipo'];
										$titulo		=	$_POST['titulo'];										
										$contenido	=	$_POST['contenido'];
										$galeria	=	$_POST['galeria'];
										
										$dia		=	$_POST['dia'];	
										$mes		=	$_POST['mes'];	
										$ano		=	$_POST['ano'];	
										$fecha		=	$ano.'-'.$mes.'-'.$dia;									
										
										
						
										
																							
mysql_query ("INSERT INTO noticias VALUES 
('', '$tipo','$titulo','$contenido','$galeria','$fecha')");

																	
															
						echo "SE ha cargado todo";	
						
						echo "<br><br>";
						
						if($_FILES['foto']['name'] != "")
						{
							
							
							
							
											
												
####
## Funcin para redimencionar las imgenes
## utilizando las liberas de GD de PHP
####
 
function resizeImagen($ruta, $nombre, $alto, $ancho,$nombreN,$extension)
{
$rutaImagenOriginal = $ruta.$nombre;
if($extension == 'GIF' || $extension == 'gif')
{
	$img_original = imagecreatefromgif($rutaImagenOriginal);
}
if($extension == 'jpg' || $extension == 'JPG')
{
	$img_original = imagecreatefromjpeg($rutaImagenOriginal);
}
if($extension == 'png' || $extension == 'PNG')
{
	$img_original = imagecreatefrompng($rutaImagenOriginal);
}
$max_ancho = $ancho;
$max_alto = $alto;
list($ancho,$alto)=getimagesize($rutaImagenOriginal);
$x_ratio = $max_ancho / $ancho;
$y_ratio = $max_alto / $alto;
if( ($ancho <= $max_ancho) && ($alto <= $max_alto) ){//Si ancho
$ancho_final = $ancho;
$alto_final = $alto;
} elseif (($x_ratio * $alto) < $max_alto){
$alto_final = ceil($x_ratio * $alto);
$ancho_final = $max_ancho;
} else{
$ancho_final = ceil($y_ratio * $ancho);
$alto_final = $max_alto;
}
$tmp=imagecreatetruecolor($ancho_final,$alto_final);
imagecopyresampled($tmp,$img_original,0,0,0,0,$ancho_final, $alto_final,$ancho,$alto);
imagedestroy($img_original);
$calidad=70;
imagejpeg($tmp,$ruta.$nombreN,$calidad);
}

	$largo=2;
		$str = "abcdefghijklmnopqrstuvwxyz";
		$may = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$num = "1234567890";
		$cad = "";
		# Comienzo de la generacion de clave.
		$cad = substr($may ,rand(0,24),1);
		$cad .= substr($num ,rand(0,10),1);
		$cad .= substr($num ,rand(0,10),1);
		for($i=0; $i<$largo; $i++) {
		$cad .= substr($str,rand(0,24),1);
		}
		;





// comprobamos que se ha enviado el formulario
// comprobar que han seleccionado una foto
if($_FILES['foto']['name'] != ""){ // El campo foto contiene una imagen...
// Primero, hay que validar que se trata de un JPG/GIF/PNG
$allowedExts = array("jpg", "jpeg", "gif", "png", "JPG", "GIF", "PNG");
$extension = end(explode(".", $_FILES["foto"]["name"]));
if ((($_FILES["foto"]["type"] == "image/gif")
|| ($_FILES["foto"]["type"] == "image/jpeg")
|| ($_FILES["foto"]["type"] == "image/png")
|| ($_FILES["foto"]["type"] == "image/pjpeg"))
&& in_array($extension, $allowedExts)) {
// el archivo es un JPG/GIF/PNG, entonces...
$extension = end(explode('.', $_FILES['foto']['name']));
$foto = $galeria . ".jpg";
$directorio = "../noticias"; // directorio de tu eleccin
// almacenar imagen en el servidor
move_uploaded_file($_FILES['foto']['tmp_name'], $directorio.'/'.$foto);
$minFoto = 'portada_'.$foto;
$resFoto = 'res_'.$foto;
resizeImagen($directorio.'/', $foto, 800, 600,$minFoto,$extension);
//resizeImagen($directorio.'/', $foto, 400, 300,$resFoto,$extension);
unlink($directorio.'/'.$foto);

echo "Se ha cargado el una nueva noticia ";
} else { // El archivo no es JPG/GIF/PNG
$malformato = $_FILES["foto"]["type"];
echo "El tipo de archivo no es una imagen valida";
//header("Location: index.php");
exit;
}
} else { // El campo foto NO contiene una imagen
		
		echo "Se ha cargado una nueva noticia sin imagen ";
//echo "No contiene ninguna imagen";

//header("Location: index.php");
//exit;
}
												
												
		$portada = $galeria ."/portada";										
												
	
	
	mysql_query ("INSERT INTO galeria VALUES 
('', '$cad','$extension','$portada')");
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
						}//FIN DEL IF SI EL CAMPO DE FOTO ESTA VACIO
						
												
		
								mysql_close ($conexion);					
					
												
												

												
												

										
												
																			
												}//FIN DE IF SI SE CLICKEO BOTON CARGAR
				
				
				?>	                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   <form method="post" action="#" enctype="multipart/form-data">
                     <table width="388" border="0" align="center">
                     <tr>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                       </tr>
                       <tr>
                         <td width="63">Noticias:</td>
                         <td width="313" align="left"><label for="select4"></label>
                           <select name="tipo" id="select4">
                             <option selected="selected">Nacionales</option>
                             <option>Internacionales</option>
                           </select></td>
                       </tr>
                       <tr>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                       </tr>
                       <tr>
                         <td>Titulo:</td>
                         <td align="left"><input name="titulo" type="text"  size="50" /></td>
                       </tr>
                       <tr>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                       </tr>
                        <tr>
                         <td>Fecha:</td>
                         <td align="left">Dia
                          <input name="dia" type="text" id="dia" size="2" maxlength="2" />
                          Mes
                          <input name="mes" type="text" id="mes" size="2" maxlength="2" />
                          Año
                          <input name="ano" type="text" id="ano" size="2" maxlength="2" /></td>
                       </tr>
                        <tr>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                       </tr>
                       <tr>
                         <td>Contenido:</td>
                         <td><textarea name="contenido"  cols="70" rows="10"></textarea></td>
                       </tr>
                       <tr>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                       </tr>
                       <tr>
                         <td>Galeria:</td>
                         <td align="left">
                         
                         
                         <?php
                         $largo2=10;
							$str2 = "abcdefghijklmnopqrstuvwxyz";
							$may2 = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
							$num2 = "1234567890";
							$cad2 = "";
							# Comienzo de la generacion de clave.
							$cad2 = substr($may2 ,rand(0,24),1);
							$cad2 .= substr($num2 ,rand(0,10),1);
							$cad2 .= substr($num2 ,rand(0,10),1);
							for($i2=0; $i<$largo2; $i++) {
							$cad2 .= substr($str2,rand(0,24),1);
							}
							;
                         ?>
                         
                         
                         <input name="galeria" type="text" id="galeria" value="<?php echo $cad2?>"size="8" readonly="readonly" />
                         
                         
                         
                         
                         
                         </td>
                       </tr>
                       <tr>
                         <td>&nbsp;</td>
                         <td align="left">&nbsp;</td>
                       </tr>
                       
                       <tr>
                         <td>Foto</td>
                         <td align="left"><input name="foto" type="file" id="foto"/></td>
                       </tr>
                                      
                       <tr>
                         <td>&nbsp;</td>
                         <td align="left">&nbsp;</td>
                       </tr>                      
                       <tr>
                         <td>&nbsp;</td>
                         <td align="center"><input type="submit" name="cargar" id="cargar" value="CARGAR NOTICIA" /></td>
                       </tr>
                       <tr>
                       		<td><br /><br /><br /></td>
                       </tr>
                     </table>
                     <br />
                     <br />

                   </form>
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
    </div><!--FIN DE  contenido-->


</div><!--FIN DE MARCOMarcoGlobal-->
</div><!--FIN DE MARCO MarcocosmoGLOBAL-->



<?php			
}
else
{			
session_destroy();		
header("location:../index.php");	
}
?>	
</body>
</html>