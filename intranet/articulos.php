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



                     <br />
                  </div>
                                    
</div><!--FIN DE MARCO menu-->
                
                
                
                
                
                <div id="sparacion"></div><!--FIN DE  sparacion-->
                
                
                
                
                
                
                <div id="contenido">
                  <h4 align="center">ENUNCIADO EN PORTADA
                  <br />
                  
                  
                  
                  
       <?php
				  	if(isset($_POST['fotos']))
					{
				  		$formato ="foto";
						
					}
					else if(isset($_POST['portada1']))
					{
						$formato ="formato1";
						$seccion ="portada1";
					}
					else if(isset($_POST['portada2']))
					{
						$formato ="formato1";
						$seccion ="portada2";
					}
					else if(isset($_POST['portada3']))
					{
						$formato ="formato1";
						$seccion ="portada3";
					}
					else if(isset($_POST['portada4']))
					{
						$formato ="formato1";
						$seccion ="portada4";
					}
					else if(isset($_POST['articulo1']))
					{
						$formato ="formato3";
						$seccion ="articulo1";
					}
					else if(isset($_POST['articulo2']))
					{
						$formato ="formato2";
						$seccion ="articulo2";
					}
					else if(isset($_POST['articulo3']))
					{
						$formato ="formato2";
						$seccion ="articulo3";
					}
					else if(isset($_POST['articulo4']))
					{
						$formato ="formato2";
						$seccion ="articulo4";
					}
					else if(isset($_POST['articulo5']))
					{
						$formato ="formato2";
						$seccion ="articulo5";
					}
					else if(isset($_POST['articulo6']))
					{
						$formato ="formato3";
						$seccion ="articulo6";
					}
					
				//FIN DE SI ES ARTICUL Y COMIENZO DE QUE FORMATO


					  if ($formato=="formato1")
					  {
						$maxtitulo="40";
						$maxcontenido="82";  
					  }
					  
					    if ($formato=="formato2")
					  {
						$maxtitulo="30";
						$maxcontenido="66";  
					  }
					    if ($formato=="formato3")
					  {
						$maxtitulo="33";
						$maxcontenido="140";  
					  }
			
				
					

				  ?>               
   
   
   
   
   
   
   
   
   
   
   
   
   
   
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <?php
				 				if (isset($_POST['cargar']))
								{
									
									//datos enunciado
										$seccion	=	$_POST['seccion'];
										$enunciado	=	$_POST['enunciado'];
										$titulo3	=	$_POST['titulo2'];
										$ancla		=	$_POST['galeria'];										
										$ext		= 	"jpg";
										
		
										require ("cnx.php");				
										$consulta = "UPDATE portada SET 
										titulo ='$titulo3',contenido ='$enunciado', ancla='$ancla', foto='$ancla', extension ='$ext' WHERE seccion='$seccion'" ;			
										$hacerconsulta = mysql_query ($consulta);
										
										
												
								}
				 
				 
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
												
												
		//$portada = $galeria ."/portada";										
												
	
	
	//mysql_query ("INSERT INTO galeria VALUES 
//('', '$cad','$extension','$portada')");
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
						}//FIN DEL IF SI EL CAMPO DE FOTO ESTA VACIO
						
												
		
								mysql_close ($conexion);					
					
												
												

												
												

										
												
																			
												}//FIN DE IF SI SE CLICKEO BOTON CARGAR
				
				
				?>
				  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
              
                  </h4>
                  
                  
                  
                  
                  
            			<?php
                        $largo3=10;
						$strgaleria = "abcdefghijklmnopqrstuvwxyz";
						$maygaleria = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
						$numgaleria = "1234567890";
						$cadgaleria = "";
						# Comienzo de la generacion de clave.
						$cadgaleria = substr($maygaleria ,rand(0,24),1);
						$cadgaleria .= substr($numgaleria ,rand(0,10),1);
						$cadgaleria .= substr($numgaleria ,rand(0,10),1);
						for($i=0; $i<$largo3; $i++) {
						$cadgaleria .= substr($strgaleria,rand(0,24),1);
						};
                         ?>      
                  
                  
                  <form method="post" action="#" enctype="multipart/form-data">
                  <table width="800" border="1" align="center">
                  <tr>
                    <td width="243" align="left" valign="top">
    
    
    
					  
                                <table width="200" border="0">
                                   <tr>
                                    <td>&nbsp;</td>
                                    <td align="center"><strong>ENUNCIADO PORTADA</strong></td>
                                  </tr>
                                   <tr>
                                    <td>&nbsp;</td>
                                    <td align="left">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td width="102">Seccion:</td>
                                    <td width="86" align="left"><input name="seccion" type="text" id="seccion" readonly="readonly" value="<?php echo $seccion; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>Titulo:</td>
                                    <td align="left"><input name="titulo2" type="text" id="titulo2" maxlength="<?php echo $maxtitulo;?>" /></td>
                                  </tr>                                  
                                  <tr>
                                    <td>Texto:</td>
                                    <td align="left"><textarea name="enunciado"  cols="40" rows="5" id="enunciado" maxlength="<?php echo $maxcontenido;?>"></textarea></td>
                                  </tr>
                                  <tr>
                                    <td>Ancla</td>
                                    <td align="left"><input name="ancla" type="text" id="ancla" value="<?php echo $cadgaleria; ?>" size="5" readonly="readonly" /></td>
                                  </tr>
                              </table>
                      <br />
					
    
    
    
    
            </td>
            <td width="541"><table width="388" border="0" align="center">
            <tr>
                <td>&nbsp;</td>
                <td align="center"><strong>NOTICIA COMPLETA</strong></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td align="left">&nbsp;</td>
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
                <td><textarea name="contenido"  cols="50" rows="10"></textarea></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Galeria:</td>
                <td align="left">
                  <input name="galeria" type="text" id="galeria" value="<?php echo $cadgaleria?>"size="8" readonly="readonly" /></td>
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
                <td><br />
                  <br />
                  <br /></td>
              </tr>
            </table></td>
          </tr>
        </table>

             </form>       
                  
<br />
                                <!--
                                 <form method="post" action="guias2.php"> 
                                   <table width="237" border="0" align="center">
                                  <tr>
                                    <td width="98">Abrir VL Nº</td>
                                    <td width="35"><label for="guia"></label>
                                    <input name="guia" type="text" id="guia" size="3" width="35px"/></td>
                                    <td width="90"><input type="submit" name="abrir" id="cas" value="Abrir"/></td>
                                  </tr>
                                </table>
                                </form>
                                 -->
                                
                                
 <br />

 

 <br /><br />
 
 
 
 
                  
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