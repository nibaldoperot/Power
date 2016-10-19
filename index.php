<html>
	<head>
		<meta charset="UTF-8">
		<title>PI</title>

		<!-- Libreria jQuery -->
		<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

		<!-- Acción sobre el botó con id=boton y actualizamos el div con id=capa -->
		<script type="text/javascript">
			
		</script>
	</head>
	<body>
	<div style="background-color: #A9F5D0; width: 100%; height: 100%;">
		<div class="menu_inicio">
			<p align="center">¿Qué desea hacer?</p>
		   	<input style="width: 100%" name="boton" id="perfil" type="button" value="Ver Perfil" />
		   	<input style="width: 100%" name="boton" id="agregar" type="button" value="Agregar Red" />
		</div>
	   	<div id="contenido" style="display: none">
	   		<input name="boton" id="cerrar" type="button" value="cerrar" style="float: right; width: 50%;"/>
	   		<div id="partials"></div>
	   	</div>
	</div>
	<script src="js/app.js"></script>
	</body>
</html>

