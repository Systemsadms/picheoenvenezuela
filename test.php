<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>



<?php

if (copy('data1/images/foto1.jpg', 'noticias/foto1.jpg')) {
   echo 'Se ha copiado el archivo corretamente';
}
else {
   echo 'Se produjo un error al copiar el fichero';
}

?>










</body>
</html>