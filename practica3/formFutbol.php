<html>
<head>
	<title>Formulario dinamico |FUTBOL|</title>
	<link rel="stylesheet" href="estilo3.css" type="text/css">
	<meta http-equiv="X-UA-Compatible" content="IE=7,9,10">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#bt1').click(function(){
				var newJugador=	'<div id="row"><br><label>Jugador: </label>'+
								'<input type="text" id="jug1" placeholder="Jugador">'+
								'<button class="delete" type="button" id="delete">-</button></div>';

				$('#div1').append(newJugador);
			});


			
			$("body").on("click", "#delete", function (){
            	$(this).parents("#row").remove();
        	})


		});

	</script>
</head>
<body>

	<div class="form" id="form1">
		<form>
			<label class="titulo">Equipo de futbol: </label>
			<input type="text" id="equipo" placeholder="Ingrese nombre del equipo"><br>
			<label>Jugador: </label>
			<input type="text" id="jug1" placeholder="Jugador"><button class="boton" type= "button" id="bt1"> + </button>
			<div id="div1" class="boton2"></div>
			<!-- <div id="remove" class="botonel"> -->
            	<!--<button class="boton" type="button" id="delete">Delete</button>-->
            <!-- </div> -->
		</form>

	</div>


</body>
</html>