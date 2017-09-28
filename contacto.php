
<?php include 'header.php';?>

<div class="banner">
	<div class="banner-img">
		<img src="images/banner-contacto.jpg" alt="imagen de Contacto">
	</div>
	<h1>Contacto</h1>
</div>

<div class="wrapper w-inner contacto">

	<div class="contacto-forma">
		<h2>Contacto</h2>

		<form name="contactform" method="post" action="contacto_forma.php" onsubmit="return checkForm(this);">
			<h4>Nombre</h4> <input type="text" name="name" placeholder="Campo obligatorio" id="name"><br>
			<h4>Correo</h4> <input type="text" name="email" placeholder="Campo obligatorio" id="phone"><br>
			<h4>Título</h4> <input type="text" name="msg_subject"><br>
			<h4>Mensaje</h4> <textarea name="msg" placeholder="Campo obligatorio" rows="6"></textarea><br>
			<input type="submit" value="ENVIAR" class="btn-enviar">
		</form>	
	</div>


	<div class="contacto-side">
		<h4>EMAIL</h4>
		preguntas@profuels.mx

		<div class="break"></div>

		<h4>EN INTERNET</h4>
		<a href="https://www.facebook.com/ProFuels/" target="_blank" class="social-link">Facebook</a>
		<a href="https://twitter.com/ProFuels " target="_blank" class="social-link">LinkedIn</a>
		<a href="https://www.linkedin.com/company/25028814/" target="_blank" class="social-link">Twitter</a>
	</div>

</div>



<?php include 'footer.php';?>
