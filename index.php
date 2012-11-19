<?php
include('Conexiones.php');
?>	

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es" dir="ltr">
<head>
	<meta http-equiv =  "Cache-Control"  content = "no-cache,no-store,must-revalidate" />
	<meta http-equiv = "Pragma" content = "no-cache" />
	<meta http-equiv = "Expires" content = "0" />
	<meta http-equiv = "Max-Age" content = "0" /> 
	<meta http-equiv="imagetoolbar" content="no" />	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<meta name="viewport" content="width=device-width, minimum-scale=1.0,  maximum-scale=1.0">
	<meta name="robots" content="noindex,nofollow,noarchive">
	<meta name="robots" content="index,follow" />
	<meta name="googlebot" content="index,follow" />
	<meta name="keywords" content="download, firmware, ios, apple, iphone, ipad, ipod" />
	<meta name="description" content="Download all firmware for you iDevices with iOS" />
	<meta name="title" content="Download Apple iOS firmware - www.applefirmwares.com" />

	<title>Apple Firmwares</title>

	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/bootstrap-responsive.css" />
	<link rel='stylesheet' href='css/molo.css' />

	<link rel="shortcut icon" href="/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="/index.php">Apple Firmwares</a>
				<div class="nav-collapse">
					<ul class="nav">
						<li class="active"><a href="#">Download</a></li>
						<!--/.<li><a href="#about">About</a></li>
						<li><a href="#contact">Contact</a></li> -->
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<div class="hero-unit">
					<h1>Download Firmware</h1>
					<br>
					<p>This page provide you the posibility for choose your iDevice for after download the iOS for you device</p>
				</div>

				<div class="row-fluid devices">
					<div class="span3">
						<center><img src='img/iphone.png'/></center>
						<center><h2>iPhone</h2></center>
						<p>Model</p>
						<p>
							<select name="iphone" id="iphone" onChange="clean('iphone');cargar_ios(this.name,'iosiphone');">
								<option value="">select model...</otion>
                                                                
									<?php
									iPhone();
									?>
									                             
							</select>
						</p>
						<p>iOS</p>
						<p>
							<select name="iosiphone" id="iosiphone">
								<option value="">select ios version...</option>
                                                                
                                                            
							</select>
						</p>
						<p><a href="javascript:download('iphone','iosiphone');" class="btn disabled" id="botoniphone">Download &raquo;</a></p>
						
					</div>
					<!--/span-->

					<div class="span3">
						<center><img src='img/ipad.png'/></center>
						<center><h2>iPad</h2></center>
						<p>Model</p>
						<p>
							<select name="ipad" id="ipad" onChange="clean('ipad');cargar_ios(this.name,'iosipad');">
								<option value="">select model...</otion>
									                                                                
									<?php
									iPad();
									?>
									    
							</select>
						</p>
						<p>iOS</p>
						<p>
							<select name="iosipad" id="iosipad">
								<option value="">select ios version...</option>
							</select>
						</p>
						<p><a href="javascript:download('ipad','iosipad');" class="btn disabled" id="botonipad">Download &raquo;</a></p>
					</div>
					<!--/span-->
					
					<div class="span3">
						<center><img src='img/ipod.png'/></center>
						<center><h2>iPod</h2></center>
						<p>Model</p>
						<p>
							<select name="ipod" id="ipod" onChange="clean('ipod');cargar_ios(this.name,'iosipod');">
								<option value="">select model...</otion>
									                                                                
									<?php
									iPod();
									?>
									  
							</select>
						</p>
						<p>iOS</p>
						<p>
							<select name="iosipod" id="iosipod">
								<option value="">select ios version...</option>
							</select>
						</p>
						<p><a href="javascript:download('ipod','iosipod');" class="btn disabled" id="botonipod">Download &raquo;</a></p>
					</div>
					<!--/span-->

					<div class="span3">
						<center><img src='img/appletvalt.png'/></center>
						<center><h2>Apple TV</h2></center>
						<p>Model</p>
						<p>
								<select name="appletv" id="appletv" onChange="clean('appletv');cargar_ios(this.name,'iosappletv');">
									      <option value="">select ios version...</option>                                                          
									<?php
									appletv();
									?>
									 							

							</select>
						</p>
						<p>iOS</p>
						<p>
							<select name="iosappletv" id="iosappletv">
								<option value="">select ios version...</option>
							</select>
						</p>
						<p><a href="javascript:download('appletv','iosappletv');" class="btn disabled" id="botonappletv">Download &raquo;</a></p>
					</div>
					<!--/span-->
				</div>
		<!--/row-->
		<br>
		<center>
<a href="https://twitter.com/Applefirmwares" class="twitter-follow-button" data-show-count="true" data-lang="en">Seguir a @Applefirmwares</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</center><br>		
				<!--<div class="hero-unit">
					<h1>About</h1>
				</div>-->

				<div class="row-fluid">
					<div class="span12"></div>
					<!--/span-->
				</div>
				<!--/row-->

				<div class="hero-unit">
					<h1>Contact</h1>
					<!--/<p>This page provide you the posibility for choose your iDevice for after download the iOS for you device</p>-->
					<br>
					
					 <script type="text/javascript">
						 var RecaptchaOptions = {
						    theme : 'clean'
						 };
					 </script>
					
<form name="formulario" id="formulario" method="post" action="">
	<p>Name:</p> 
	<input type="text" name="nombre" id="nombre" /><br />
	<p>E-mail:</p> 
	<input type="text" name="email" id="email" /><br />
	<p>Message:</p> 
	<textarea rows="8" name="mensaje" id="mensaje">
	</textarea>
        <?php
          require_once('recaptchalib.php');
          $publickey = "6Ld6zs8SAAAAAObLWu4YjnNrLj88zoZyg3t6ZlCQ"; // you got this from the signup page
          echo recaptcha_get_html($publickey);
        ?>
        <br>
	<p><a id="btnSend" class="btn btn-primary btn-large" href="javascript:void(0);">Send &raquo;</a></p>
	<p name"validate" id="validate"></p>
	

	
	
</form>

				</div>

				<div class="row-fluid">
					<div class="span12"></div>
					<!--/span-->
				</div>
				<!--/row-->

			</div>
			<!--/span-->
		</div>
		<!--/row-->

		<hr>

		<footer>
			<p>&copy; Apple Firmwares 2012</p>
		</footer>
	</div>
	<!--/.fluid-container-->

	<script src="/js/jquery.js"></script>
	<script src="/js/jquery.validate.js"></script>
    <script src="/js/bootstrap-transition.js"></script>
    <script src="/js/bootstrap-alert.js"></script>
    <script src="/js/bootstrap-modal.js"></script>
    <script src="/js/bootstrap-dropdown.js"></script>
    <script src="/js/bootstrap-scrollspy.js"></script>
    <script src="/js/bootstrap-tab.js"></script>
    <script src="/js/bootstrap-tooltip.js"></script>
    <script src="/js/bootstrap-popover.js"></script>
    <script src="/js/bootstrap-button.js"></script>
    <script src="/js/bootstrap-collapse.js"></script>
    <script src="/js/bootstrap-carousel.js"></script>
    <script src="/js/bootstrap-typeahead.js"></script>
    
    <!-- Google Analitycs -->

	<script type="text/javascript">

  	var _gaq = _gaq || [];
  	_gaq.push(['_setAccount', 'UA-30338281-1']);
  	_gaq.push(['_trackPageview']);

	  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
 	 })();

	</script>

	<!-- Google Analitycs -->
    
    <script type="text/javascript">
    
      $(document).ready(function() {

       $('#btnSend').live('click', function(){
               contactform();
       });

       $('#iosiphone').live('change', function(){
               $('#botoniphone').removeClass('disabled');
       });

       $('#iosipad').live('change', function(){
               $('#botonipad').removeClass('disabled');
       });

       $('#iosipod').live('change', function(){
               $('#botonipod').removeClass('disabled');
       });
         
       $('#iosappletv').live('change', function(){
               $('#botonappletv').removeClass('disabled');
       });

});

function contactform(){
       var form = $('#formulario').serialize();

       $.ajax({
               url: "/contact.php",
               context: document.body,
               type: "POST",
               data: form,
               success: function(data, stat, all){
                       var wrap = $("#validate");
                       wrap.html(data);
               }
       });
}

function clean(id){
       $(id).html('')
}

function cargar_ios(device,ios)
{
   var idevice = $('#'+device).val();

   $("#"+ios).empty();
   $("#"+ios).append("<option selected>-</option>");
   $.post("/ios.php", {idevice: idevice}, function(data){
               $("elemento", data).each(function (j) {
                       $("#"+ios).append("<option value='" + $(this).attr("item") + "'>" + $(this).attr("valor") + "</option>");
               });
       });
}

function comprobar(id,device,ios){
   var idevice = $('#'+device).val(),
           ios = $('#'+ios).val();

   $.post("/comprobar.php", {idevice: idevice, ios: ios}, function(data){
               $("#"+id).html(data);
   });

   return false;
}

function download(device,ios){
   var idevice = $('#'+device).val(),
           ios = $('#'+ios).val();

       $.post("/download.php", {idevice: idevice, ios: ios}, function(data){
               document.location = data
       });

       return false;
}

	</script>
    
    
    <!--/.scripts -->
</body>
</html>