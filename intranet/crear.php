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
<title>Systems Aedmins C.A</title>
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
                  
                  
                  <?php
				  
				  
				    if(isset($_POST['crear']))
					{
					$seccion 	= "seccion";
					$titulo		= "titulo";
					$contenido	= "contenido";
					$ancla		= "ancla";
					$foto		= "foto";
					$ext		= "ext";

					require ("cnx.php");
										
					mysql_query ("INSERT INTO portada VALUES 
					('', '$seccion', '$titulo','$contenido','$ancla','$foto','$ext')");
					mysql_close ($conexion);
					
					echo "SE HA CREADO LA NUEVA SECCION EN PORTADA";
					}
					
				  ?>
                  

                  
                  <h3 align="center">Crear nuevo campo en portada</h3>
                  <form method="post" action="#">
                    <br />
                    <table width="200" border="1" align="center">
                      <tr>
                        <td>Seccion</td>
                        <td><input name="seccion" type="text" id="seccion" value="Seccion" /></td>
                      </tr>
                      <tr>
                        <td>Contenido</td>
                        <td><input name="cotenido" type="text" id="cotenido" value="Titulo" /></td>
                      </tr>
                      <tr>
                        <td>ancla</td>
                        <td><input name="ancla" type="text" id="ancla" value="ancla" /></td>
                      </tr>
                      <tr>
                        <td>foto</td>
                        <td><input name="foto" type="text" id="foto" value="foto" /></td>
                      </tr>
                      <tr>
                        <td>extension</td>
                        <td><input name="ext" type="text" id="ext" value="ext" /></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="crear" id="crear" value="Crear" /></td>
                      </tr>
                    </table>
                    <br />
                  </form>
                  
                  
                  
				<br />
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