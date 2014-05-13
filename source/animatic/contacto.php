<?php include('header.php'); ?>
<div class="wrapper">
	<?php include('sidebar.php'); ?>
	<section id="contenedor-main">
		<form action="contacto.php">
			<h2>Contactenos</h2>
			<label for="nombre">Nombres</label>
			<input type="text" id="nombre"><br>
			<label for="email">Direccion de correo</label>
			<input type="text" id="email"><br>
			<label for="mensaje">Mensaje</label>
			<textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea><br>
			<button name="enviar">Enviar</button>
		</form>
	</section>
</div>

<!-- Cerrado de etiquetas generales-->
</body>
</html>