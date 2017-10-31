<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>REGISTRO - Formoid contact form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="blurBg-false" style="background-color:#EBEBEB">




<!-- Start Formoid form-->
<link rel="stylesheet" href="formulario_files/formoid1/formoid-solid-green.css" type="text/css" />
<script type="text/javascript" src="formulario_files/formoid1/jquery.min.js"></script>
<form  form action="g-agregar.php" class="formoid-solid-green" style="background-color:#ffffff;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#0b0b0b;max-width:480px;min-width:150px" method="post">
<div class="title">
<h2>REGISTRO</h2>
</div>
	<div class="element-name">
	<label class="title"></label>
	<span class="nameFirst">
	<input placeholder="Name First" type="text" size="8" name="nombre" id="nombre" />
	<span class="icon-place"></span>
	</span>
	<span class="nameLast">
	<input placeholder="Name Last" type="text" size="14" name="apellido" id="apellido" />
	<span class="icon-place"></span>
	</span>
	</div>
	<div class="element-input">
	<label class="title"></label>
	<div class="item-cont">
	<input class="large" type="text" name="cedula" id="cedula" placeholder="cedula"/>
	<span class="icon-place"></span>
	</div>
	</div>
	<div class="element-select">
	<label class="title"></label>
	<div class="item-cont">
	<div class="large">
	<span>
	<select name="carrera" id="carrera" >

	<?php

include 'cn.php';

$query = "SELECT * FROM carrera  ";
$resultado = $conexion->query($query);
while($rows = $resultado-> fetch_assoc()){
?>
<option value="<?php echo $rows['codigo'] ?>"><?php echo $rows['nombre'] ?></option>
	

<?php  } ?>


</select><i></i><span class="icon-place"></span></span></div></div></div>

<div class="submit"><input type="submit" value="Submit"/></div>
</form>

<script type="text/javascript" src="formulario_files/formoid1/formoid-solid-green.js"></script>
<!-- Stop Formoid form-->



</body>
</html>