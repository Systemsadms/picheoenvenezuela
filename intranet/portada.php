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
<title>Systems Admins C.A</title>
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
                  <table width="530" border="0" align="center">
                    <tr>
                      <td width="433" align="center"><em><strong><font color="#999999">Sistema de Control de Usuarios y Carga de Tracking. v2.0</font></strong></em></td>
                    </tr>
                  </table>
                  
                  <br />
                  
                  
                  
                  
                  
                  
                  
                  
                    <table width="800" border="1" align="center">
                      <tr>
                      
                        <td width="452">
                        <form method="post" action="rotador.php">
                        <input name="fotos" type='submit' id="fotos" style='width:450px; height:180px' value="Imagenes del Rotador" />
                        </form>
                        </td>
                        
                        <td width="332">
                        <form method="post" action="articulos.php">
                        <input name="portada1" type='submit' id="portada1" style='width:300px; height:45px' value="Portada1" />
                        <input type='submit' style='width:300px; height:45px' value="Portada2" name="portada2" id="portada2" />
                        <input type='submit' style='width:300px; height:45px' value="Portada3" name="portada3" id="portada3" />
                        <input type='submit' style='width:300px; height:45px' value="Portada4" name="portada4" id="portada4"/></td>
                      </tr>
                    </table>
                    <table width="800" border="1" align="center">
                      <tr>
                        <td><h2>ARTICULOS DESTACADOS</h2></td>
                      </tr>
                    </table>
                    <table width="800" border="1" align="center">
                      <tr>
                        <td><input name="articulo1" type='submit' id="articulo1" style='width:250px; height:180px' value="Articulo1" /></td>
                        <td><input type='submit' style='width:280px; height:45px' value="Articulo2" name="articulo2" id="articulo2"/>
                        <input type='submit' style='width:280px; height:45px' value="Articulo3" name="articulo3" id="articulo3"/>
                        <input type='submit' style='width:280px; height:45px' value="Articulo4" name="articulo4" id="articulo4"/>
                        <input type='submit' style='width:280px; height:45px' value="Articulo5" name="articulo5" id="articulo5"/></td>
                        <td><input type='submit' style='width:250px; height:180px' value="Articulo6" name="articulo6"/></td>
                      </tr>
                    </table>
                    </form>
                    <table width="800" border="1" align="center">
                      <tr>
                       <td><h2>VIDEOS DESTACADOS</h2></td>
                      </tr>
                    </table>
                    <table width="800" border="1" align="center">
                      <tr>
                        <td>
                        <form>
                        <input name="video" type='submit' id="video" style='width:250px; height:180px' value="Video1" /></td>
                        <td><input name="video" type='submit' id="video" style='width:280px; height:45px' value="Video2" />
                          <input name="video" type='submit' id="video" style='width:280px; height:45px' value="Video3" />
                          <input name="video" type='submit' id="video" style='width:280px; height:45px' value="Video4" />
                        <input name="video" type='submit' id="video" style='width:280px; height:45px' value="Video5" /></td>
                        <td><input name="video" type='submit' id="video" style='width:250px; height:180px' value="Video6" /></td>
                      </tr>
                    </table>
                    <br />
                    <br />
                  </form>
                  
                  
                  
				<br />
                
                <form method="post" action="#"><!--en el action va crear.php para crear un nuevo campo en portada-->
                <table width="200" border="1" align="center">
                  <tr>
                    <td><input name="nuevo" type='submit' id="nuevo" style='width:350px; height:45px' value="Crear Nueva Seccion" /></td>
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
                                
                                
 <br /><br /><br />
 
 
 
 
                  
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