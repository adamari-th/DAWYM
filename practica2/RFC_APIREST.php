<!--
	Estuadiante: Adamari Martinez Ruiz
-->

<html>
<head>
	<title>RFC - APIREST</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=7,9,10">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="estilo2.css" type="text/css">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script>
		$(document).ready(function(){

			$('#btnM').click(function(){
				$('#f1').show();
				$('#f2').show();
			});

			$('#btnO').click(function(){
				$('#f1').hide();
				$('#f2').hide();
			});

			$('#btn1').click(function(){
				// ejemplo var cad1,cad2,cad3;	//genRFC= cad1 + cad2 +cad3;
				if ($('#nombre').val()== '' || $('#nombre').val()== '#nombre' || $('apellidopat').val()=='' || $('apellidomat').val()=='' || $('fecha').val()=='') {
					alert ("Faltan casillas por llenar");
					//$("span").html("<span>*Los campos son obligatorios</span>");
						//return false
				}
				else{
					nombre = $("#nombre").val().toUpperCase();
					apellidoPaterno = $("#apellidopat").val().toUpperCase();
					apellidoMaterno = $("#apellidomat").val().toUpperCase();
					fecha = $("#fecha").val();

					var rfc = "";
				//var homclave = alt;

					rfc += apellidoPaterno.substr(0, 2);
					rfc += apellidoMaterno.substr(0, 1);
					rfc += nombre.substr(0, 1);
					rfc += fecha.substr(2, 2);
					rfc += fecha.substr(5, 2);
					rfc += fecha.substr(8,2);
				}

				

				//rfc += "-" + homclave;
				$("#RFC").val(rfc);


			});

			$('#btn2').click(function(){
				var id=document.getElementById("iduser").value;
					if ($('#iduser').val()== '' || $('#iduser').val() == 'iduser') {
						//alert("Ingrese ID");
						$("span").html("<span>*El campo es obligatorio</span>");
						return false
					}
					else{
						$.ajax({
							//id = $("#iduser").val();
							url: "https://jsonplaceholder.typicode.com/users/" + $("#iduser").val() ,					
							method: "GET",
							//var id = url + $("#iduser").val();
					
							success: function(data){
								$('#nom').val(data.name);
								$('#email').val(data.email);
								$('#telefono').val(data.phone);
							}
						});
					}
			});

		});

	</script>
</head>
<body>
	<div class="form" id="f1">
		<img src="image/perfil.png" alt="user">
		<p class="titulo">OBTENCIÓN DE UN RFC</p>
		<form>
			<label>Nombre(s): </label>
			<input type="text" id="nombre" placeholder="Ingrese nombre(s)" required="" pattern="[A-Z][a-z]+(\s)?([A-Z][a-z]+)?" ><br />
			<br>
			<label>Apellido paterno:</label>
			<input type="text" required id="apellidopat" placeholder="Ingrese apellido parterno" required="" pattern="[A-Z][a-z]+" ><br />
			<br>
			<label>Apellido materno:</label>
			<input type="text" required id="apellidomat" placeholder="Ingrese apellido materno" required=""  pattern="[A-Z][a-z]+" ><br />
			<br>
			<label>Fecha de nacimiento:</label>
			<input type="date" id="fecha" required="" >
			<br>
			<button type="button" id=btn1>Generar RFC</button>
			<label>RFC:</label>
			<input id="RFC" placeholder="RFC"><br />
		</form>
	</div> 
	
	<button type="button" class= "boton" id="btnM">MOSTRAR</button><br>
	<button type="button" class= "boton" id="btnO">OCULTAR</button>
	

	<div class="form" id="f2">
		<img src="image/api.png" alt="usera">
		<p class="titulo">AJAX - API REST</p>
		<form>
			<label>ID: </label><span></span>
			<input type="int" required="" id="iduser" placeholder=" ID's"><br />
			<button type="button" id=btn2>Consultar API REST</button><br />
			<label>Nombre(s): </label>
			<input type="text" id="nom" placeholder="Nombre(s)"><br />
			<br>
			<label>Email:</label>
			<input type="text"id="email" placeholder="username@ejemplo.com"><br />
			<br>
			<label>Teléfono:</label>
			<input type="int"id="telefono" placeholder="123-456-7890"><br />
			<br>
			<br />
		</form>	
		
	
	</div> 

</body>
</html>