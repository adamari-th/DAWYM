<?php
include('conexion.php');
  $con = conectarbd();
  $consulta = "SELECT * FROM aspirantes";
  $ejecutarConsulta = mysqli_query($con, $consulta);
  $filas = mysqli_num_rows($ejecutarConsulta);
  $imprimirF = mysqli_ferch_array($ejecutarConsulta);

  if(!$$ejecutarConsulta){
    echo"Error en la consulta";
  }else {
      if($filas<1){
      echo"<tr><td>Sin registros</td></tr>";
    }else{
      for ($i=0; $i <= $imprimirF ; $i++) { 
      echo '
        <tr>
          <td>'.$imprimirF[0].'</td>
          <td>'.$imprimirF[1].'</td>
          <td>'.$imprimirF[2].'</td>
          <td>'.$imprimirF[3].'</td>
          <td>'.$imprimirF[4].'</td>
          <td>'.$imprimirF[5].'</td>
          <td>'.$imprimirF[6].'</td>
          <td>'.$imprimirF[7].'</td>
        </tr>
        ';
      }
    }
  }
?>