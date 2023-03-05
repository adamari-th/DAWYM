<?php 
require_once '/xampp/htdocs/admin/pages/forms/php/conexion.php';
include('conexion.php');
  if (isset($_POST['guardar'])) {
    $nombre =  $_POST['inputnombre'];
    $fechanac =  $_POST['inputfechanac'];
    $edad = $_POST['inputedad'];
    $bachillerato= $_POST['inputbachillerato'];
    $promedio= $_POST['inputpromedio'];
    $municipio= $_POST['inputmunicipio'];
    $certificado= $_POST['inlineCheckbox1'];
    $foto = $_POST['exampleInputFile'];
   
    $con = conectarbd();
    $insertDatos = "INSERT INTO aspirantes (nombre,fecha_nac,edad,bachillerato,promedio,municipio,certificado,foto)
                    VALUES ('$nombre', '$fecha_nac', '$edad', '$bachillerato', '$promedio', '$municipio', '$certificado', '$foto');";

    $ejecutarInsertar = mysql_query($enlace, $insertDatos);

    if (!$ejecutarInsertar) {
      echo "Error en la linea de sql";
    }
  }

?>
