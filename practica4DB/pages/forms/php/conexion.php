<?php
function conectabd() 
{ 
  	$host = 'localhost'; //'148.222.7.8'
	$user = 'root';
	$pass = '';

   if (!( $link = @mysqli_connect($host,$user,$pass)) )
   {
      echo "Error al realizar la conexión a la base de datos.";
      exit();
   }

   if (!mysqli_select_db($link, "formulario"))
   { 
      echo "Error al seleccionar la base de datos."; 
      exit(); 
   }    
   return $link; 
} 
?>