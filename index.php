<html>
<head>
	<title>FORMULARIO</title>
	<link rel="stylesheet" href="estilos.css" type="text/css">
	<meta http-equiv="X-UA-Compatible" content="IE=7,9,10">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#f1').show();

			$('#btn1').click(function(){
				$('#e1').show();
			});

			$('#btn2').click(function(){
				$('#e1').hide();
			});

			var num1 = document.getElementById('num1');
			var num2 = document.getElementById('num2');
			var res = document.getElementById('result');

			document.getElementById("suma").addEventListener("click", function(){
				res.value = parseFloat(num1.value)+parseFloat(num2.value);
			});

			document.getElementById("resta").addEventListener("click", function(){
				res.value = parseFloat(num1.value)-parseFloat(num2.value);
			});

			document.getElementById("multi").addEventListener("click", function(){
				res.value = parseFloat(num1.value)*parseFloat(num2.value);
			});

			document.getElementById("divi").addEventListener("click", function(){
				res.value = parseFloat(num1.value)/parseFloat(num2.value);
			});

		});

	</script>
</head>
<body>
	
	<div class="titulo"><B>Operaciones Aritmeticas<B></div>

	<div class="panel-1" id="e1" >
	<form action="" method="POST">
		<label>Primer numero</label>
		<input type="text" id="num1"><br />
		<br>
		<label>Segundo numero</label>
		<input type="text"id="num2">
		<br>
		<br />
		<button type="button" class = "btnC" id="suma">Suma</button>
		<button type="button" class = "btnC" id="resta">Resta</button>
		<button type="button" class = "btnC" id="multi">Multiplicacion</button>
		<button type="button" class = "btnC" id="divi">Division</button>
		<br>
		<br>
		Resultado:<input type="button" readonly id="result">
	</form>
	
	</div>
		
	  		<button class="boton" id="btn1">Mostrar Formulario</button>
	  		<button class="boton" id="btn2">Ocultar Formulario</button>
		

</body>
</html>