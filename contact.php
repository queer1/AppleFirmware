<?php
	  require_once('recaptchalib.php');
	  $privatekey = "6Ld6zs8SAAAAAG-RzOihbKXl9SyKokVIIkoWSH61";
	  $resp = recaptcha_check_answer ($privatekey,
	                                $_SERVER["REMOTE_ADDR"],
	                                $_POST["recaptcha_challenge_field"],
	                                $_POST["recaptcha_response_field"]);

		
	  if (!$resp->is_valid) {
	    // What happens when the CAPTCHA was entered incorrectly
	    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
	         "(reCAPTCHA said: " . $resp->error . ")");
	  } else {
	   
		$nombre = $_REQUEST['nombre'];
	$email = $_REQUEST['email'];
	$mensaje = $_REQUEST['mensaje'];
	$para = 'ruben.belando.sanchez@gmail.com';
	$titulo = 'testing';
	$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";

	if (mail ($para, $titulo, $msjCorreo)) {
		echo 'El mensaje se ha enviado';
	} else {
		echo 'Falló el envio';
	}


	  }

	
?>