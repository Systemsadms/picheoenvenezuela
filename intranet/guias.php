<?php
session_start();
if ($_SESSION['admin'] == 'edanta')
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
<li class="tfirst"><a href="home.php">Home</a></li>
                     <li><a href="clientes.php">Clientes</a></li>
                     <li><a href="guias.php">Guias</a></li>                     
                     <li><a href="no.php">Almacen</a></li>                     
                     <li><a href="pagos.php">Pagos</a></li>
                     <li><a href="no.php">Galeria</a></li>
                     <li><a href="no.php">Ayudas y Tutoriales</a></li>
                     <li><a href="destruir.php"><font color="#0000FF">Cerrar Admin Center</font></a></li>
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
                  
                  <table width="400" border="0" align="center">
                                  <tr>
                                    <td width="429" align="center"> <form method="POST" action="#">
                                 
                                 <table width="412" border="0" align="center">
                                  <tr>
                                    <td width="151">Buscar VL Por:</td>
                                    <td width="73"><select name="filtro" id="filtro">
                                      <option>Todos</option>
                                    </select></td>
                                    <td width="37">Dato<b>:</b></td>
                                    <td width="42"><label for="dato"></label>
                                      <input name="dato" type="text" id="dato" size="7" /></td>
                                    <td width="85"><input name="buscar" type="submit" id="dato" value="Ver VLs"/></td>
                                  </tr>
                                </table>
                                </form></td>
                                  </tr>
                                </table>
                                
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
 
 
 
 <?php 

		if(isset ($_POST["buscar"]))
			{
				
				$filtro	= $_POST['filtro'];
				$dato	= $_POST['dato'];
				
				require("cnx.php");
				
				$consulta = "SELECT * FROM vl;";
				$hacerconsulta=mysql_query ($consulta,$conexion);


				
				echo "<table border='3' bordercolor='#FF0000' align='center'>";
				echo "<tr>";
				echo "<td align='center'><b>Id</b></td>";
				echo "<td align='center'><b>Cliente</b></td>";
				echo "<td align='center'><b>VL N°</b></td>";
				echo "<td align='center'><b>Estatus</b></td>";




				echo "</tr>";
				
				
				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				
				while ($reg)
				{
				echo "<tr>";
				echo "<td align='center'>".$reg[0]."</td>";
				echo "<td align='center'>".$reg[1]."</td>";
				echo "<td align='center'>".$reg[2]."</td>";
				echo "<td align='center'>".$reg[3]."</td>";

				
				
				


				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				echo "</tr>";
				}
				echo "</table>";
				mysql_close($conexion);
				
	
			}
			
			
			
			
			
			
 ?>
                  
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