<!DOCTYPE html>
<html lang="en">
<head>
    <title>Solicitud de Información</title>
   <?php include("inc/htmlhead.php"); ?>
</head>

<body id="part6">
	<?php include("inc/nav.php"); ?>
	
			
	<form id="myForm" method="post" action ="form-to-email.php">
		<fieldset>
			<legend>CONTACTANOS </legend>
				<label for="client"> Nombre: </label>
				<input type="text" name="client" class="form-control" id="client"/>
				<br/>
				<label for="email"> E-mail: </label><!--If used on a cellphone or tablet, it will show the @ symbol-->
				<input type="email" name="email" class="form-control" id="email"/>
				<br/>
				<label for="phone"> Teléfono: </label> <!--If used on a cellphone or tablet, it will show the number menu-->
				<input type="number" name="phone" class="form-control" id="phone"/>
				<br/>
				<label for="message"> Mensaje: </label>
				<textarea name="message" class="form-control" rows="5" id="message"></textarea>
		</fieldset>
		<br/>
		<input type="submit" name="action" value="Enviar" class="btn btn-primary btn-lg"/>
	</form>
	
	<div id="info">
		<p> Isabel Benabib 
		<br/>5527557040 
		<br/> isabenabib@hotmail.com </p>
	</div>
	
	
	
</body>  
 
</html>