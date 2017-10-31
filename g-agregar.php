<?php

include 'cn.php';

$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$cedula = $_REQUEST['cedula'];
$carrera = $_REQUEST['carrera'];
$fecha_actual = date("Y-m-d");


$ins = "INSERT INTO estudiantes(nombre, apellido, cedula) VALUES  ('$nombre', '$apellido','$cedula' )";
$matri = "INSERT INTO matricula( cedula, codigo, hora) VALUES  ('$cedula', '$carrera','$fecha_actual' )"; 

 $result= mysqli_query($conexion, $ins);
 $results= mysqli_query($conexion, $matri);

 if(!$result and !$results){
 
     echo '<script> alert(" ERROR");
     window.history.go(-1);
     </script>';
 }else{
 
    echo '<script> 
    window.history.go(-1);
    </script>';
 } 