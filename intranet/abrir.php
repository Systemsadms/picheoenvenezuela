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
                  <table width="530" border="0" align="center">
                    <tr>
                      <td width="433" align="center"><em><strong><font color="#999999">Sistema de Control de Usuarios y Carga de Tracking. v2.0</font></strong></em></td>
                    </tr>
                  </table>
                  
                  <br /><br />
   <br />
                                
                              <?php 

		if(isset ($_POST["abrir"]))
			{
				
				$id = $_POST["id"];
				
				$ssql = mysql_query("SELECT * FROM usuarios WHERE id='$id'");
				
				
				if (mysql_num_rows($ssql)==1)
				{
				$cas	 	=  mysql_result($ssql,0,"id");
				$nick 		=  mysql_result($ssql,0,"nick");
				$pass	 	=  mysql_result($ssql,0,"pass");
				$nombres 	=  mysql_result($ssql,0,"nombres");
				$apellidos 	=  mysql_result($ssql,0,"apellidos");
				$ci 		=  mysql_result($ssql,0,"ci");
				$email 		=  mysql_result($ssql,0,"email");
				$pais 		=  mysql_result($ssql,0,"pais");
				$estado 	=  mysql_result($ssql,0,"estado");
				$ciudad 	=  mysql_result($ssql,0,"ciudad");
				$telefono 	=  mysql_result($ssql,0,"telefono");
				$celular 	=  mysql_result($ssql,0,"celular");
				$dir 		=  mysql_result($ssql,0,"dir");
				mysql_close($conexion);
				
				?>
				
                   <table width="200" border="0" align="center">
                  <tr>
                    <td><table width="200" border="0" align="center">
                      <tr>
                        <td width="82" align="left"><b>ID:</b></td>
                        <td width="102" align="left"><?php echo $id ?></td>
                      </tr>
                      <tr>
                        <td align="left"><b>Nick:</b></td>
                        <td align="left"><?php echo $nick ?></td>
                      </tr>
                      <tr>
                      <tr>
                        <td align="left"><b>Clave:</b></td>
                        <td align="left"><?php echo $pass ?></td>
                      </tr>
                        <td align="left"><b>Nombres:</b></td>
                        <td align="left"><?php echo $nombres ?></td>
                      </tr>
                      <tr>
                        <td align="left"><b>Apellidos:</b></td>
                        <td align="left"><?php echo $apellidos ?></td>
                      </tr>
                      <!--
                      <tr>
                        <td align="left"><b>Cedula:</b></td>
                        <td align="left"><?php echo $ci ?></td>
                      </tr>
                      -->
                      <tr>
                        <td align="left"><b>E-mail:</b></td>
                        <td align="left"><?php echo $email ?></td>
                      </tr>
                      <tr>
                        <td align="left"><b>Pais:</b></td>
                        <td align="left"><?php echo $pais ?></td>
                      </tr>
                      <tr>
                        <td align="left"><b>Estado:</b></td>
                        <td align="left"><?php echo $estado ?></td>
                      </tr>
                      <tr>
                        <td align="left"><b>Ciudad:</b></td>
                        <td align="left"><?php echo $ciudad ?></td>
                      </tr>
                      <tr>
                        <td align="left"><b>Telfono:</b></td>
                        <td align="left"><?php echo $telefono ?></td>
                      </tr>
                      <tr>
                        <td align="left"><b>BBpin:</b></td>
                        <td align="left"><?php echo $celular ?></td>
                      </tr>
                      <tr>
                        <td align="left"><b>Direccion:</b></td>
                        <td align="left"><?php echo $dir ?></td>
                      </tr>
                    </table></td>
                    
                    <td valign="top">
                    
                    
                    <table width="113" border="0" align="center">
                          <tr>
                            <td width="117" align="center">
                            <form method="POST" action="editarcliente.php">
                            <input type="hidden" value="<?php echo $id;?>" name="id"/>
                            <input type="submit" value="Editar Perfil de Usuario" name="editar"/>
                            
                            </form></td>
                          </tr>
                        </table>

                    
                    </td>
                    <!--Fin de la tabla tracking-->
                    
                    
                  </tr>
                </table>
<br /><br />
                
                

                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                


			
				
				<?php
				
				}
				else
				{
					echo "<b>Ese numero de casillero no exite</b><br><br>";
					echo "<a href='clientes.php'>Volver a Buscador</a><br><br>";
				}	
			}
			else
			{
				echo"<b>Sus Cambios Fueron Guardados con exito reaice una nueva consulta</b></br>";
				echo"</br><br>";
			}
			
			
			
			
 ?>
 
 
                                
                                
 <br /><br /><br />
 
 
 
 

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