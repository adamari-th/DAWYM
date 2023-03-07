<?php 
require_once '/xampp/htdocs/admin/pages/forms/php/conexion.php';
//include('conexion.php');
 $con = conectabd();
  //if (isset($_POST['guardar'])) {
    $nombre =  $_POST['nombre'];
    $fechanac =  $_POST['fecha_nac'];
    $edad = $_POST['edad'];
    $bachillerato= $_POST['bachillerato'];
    $promedio= $_POST['promedio'];
    $municipio= $_POST['municipio'];
    $certificado= $_POST['certificado'];
   
    $fecha_mysql = date("Y-m-d", strtotime($fechanac));
    

    $imageNombre = $_FILES['fotos']['name'];
    
    if (isset($imageNombre) && $imageNombre) {
        $tipo = $_FILES['fotos']['type'];
        $temp = $_FILES['fotos']['tmp_name'];

        if (!((strpos($tipo, 'gif') || strpos($tipo, 'png') || strpos($tipo, 'jpeg')))) {
            header("location: ../general.php");
        } else {
            $insertDatos = "INSERT INTO aspirantes (nombre,fecha_nac,edad,bachillerato,promedio,municipio,certificado,foto) VALUES('".$nombre."','".$fecha_mysql."',".$edad.", '".$bachillerato."',".$promedio.",'".$municipio."', '".$certificado."','".$imageNombre."')";
            $ejecutarInsertar = mysqli_query($con, $insertDatos);
            if($ejecutarInsertar){
                move_uploaded_file($temp, '/xampp/htdocs/admin/image/'.$imageNombre);
                header("location: ../general.php");
            }else{
                echo "ocurrio un error en el servidor";
            }
        }
    }
?>
