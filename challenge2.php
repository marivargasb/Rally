<?php
($argc>1) ? null: die("No contiene los parametros suficientes");

$conexion = mysqli_connect("localhost", "root", "", "rally") or die("Error al conectar a la base de datos");

$query = "SELECT estudiantes.nombre as nombre,apellido,carrera.nombre,hora FROM estudiantes,carrera,matricula WHERE estudiantes.cedula= matricula.cedula and carrera.codigo=matricula.codigo";
$resultado = $conexion->query($query);

$fp = fopen($argv[1].'.csv', 'w');

  fputcsv($fp, ["Cedula","Nombre","Apellidos","Carrera","Fecha"]); // headers
while($row = $resultado-> fetch_assoc())
  {
      fputcsv($fp, $row);
  }

fclose($fp);
