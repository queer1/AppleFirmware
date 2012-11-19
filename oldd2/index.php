<?php
include('Conexiones.php');
?>	
<html>

<head>

<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
<title>Apple Firmwares</title>
<link href="style.css" rel="stylesheet" type="text/css" />

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

<meta name="robots" content="index,follow" />
<meta name="googlebot" content="index,follow" />
<meta name="keywords" content="download, firmware, ios, apple, iphone, ipad, ipod" />
<meta name="description" content="Download all firmware for you iDevices with iOS" />
<meta name="title" content="Download Apple iOS firmware - www.applefirmwares.com" />
<meta http-equiv="imagetoolbar" content="no" />

</head>

    <body bgcolor="#c2c8cd">

    <div style="margin: 0 auto; width: 550px;"><img src="/img/logo.png" alt=""/></div>
    <div id="divmaster">
    <form method="post" action="/" class="form">

            <!-- SELECT IPHONE -->

            <div id="divimg"><img src="/img/iphone.jpg" alt=""/></div>
            <div id="divselect">
            <h3>iPhone</h3>
            <label for="iphone">Modelo</label>
            <select name="iphone" id="iphone" onChange="clean('iphone');cargar_ios(this.name,'iosiphone');">
            <option value="">-</option>

                <?php
                iPhone();
                ?>

            </select>

            <label for="iosiphone">iOS</label>
            <select name="iosiphone" id="iosiphone" onChange="clean('mensageiphone');"></select>
            <!-- <input type="button" name="enviar" id="enviar" value="Enviar" onClick="comprobar('mensageiphone','iphone','iosiphone');download('iphone','iosiphone');">  -->
            <input type="button" name="enviar" id="enviar" value="Enviar" onClick="download('iphone','iosiphone');">
            <div id="mensageiphone" style="margin-top: 10px;"></div>
            </div>
            <!-- SELECT IPHONE -->

            <!-- SELECT IPOD -->
            <div id="divimg"><img src="/img/ipod.jpg" alt=""/></div>
            <div id="divselect">
            <h3>iPod</h3>
            <label for="ipod">Modelo</label>
            <select name="ipod" id="ipod" onChange="clean('ipod','mensageiphone');cargar_ios(this.name,'iosipod');">
            <option value="">-</option>

                <?php
                ipod();
                ?>

            </select>

            <label for="iosipod">iOS</label>
            <select name="iosipod" id="iosipod" onChange="clean('mensageipod');"></select>
            <input type="button" name="enviar" id="enviar" value="Enviar" onClick="download('ipod','iosipod');">
            </div>
            <div id="mensageipod"></div>

            <!-- SELECT IPOD -->

            <!-- SELECT IPAD -->

            <div id="divimg"><img src="/img/ipad.jpg" alt=""/></div>
            <div id="divselect">
            <h3>iPad</h3>
            <label for="ipad">Modelo</label>
            <select name="ipad" id="ipad" onChange="clean('ipad');cargar_ios(this.name,'iosipad');">
            <option value="">-</option>
    
                <?php
                ipad();
                ?>

            </select>
            <label for="ipad">iOS</label>
            <select name="iosipad" id="iosipad" onChange="clean('mensageipad');"></select>
            <input type="button" name="enviar" id="enviar" value="Enviar" onClick="download('ipad','iosipad');">
            </div>
            <div id="mensageipad"></div>

        <!-- SELECT IPAD -->

        <!-- SELECT AppleTV -->

        <div id="divimg"><img src="/img/appletv.jpg" alt=""/></div>
        <div id="divselect">
        <h3>Apple TV</h3>
        <label for="appletv">Modelo</label>
        <select name="appletv" id="appletv" onChange="clean('appletv');cargar_ios(this.name,'iosappletv');">
        <option value="">-</option>

            <?php
            appletv();
            ?>

        </select>
        <label for="iosappletv">iOS</label>
        <select name="iosappletv" id="iosappletv" onChange="clean('mensageappletv');"></select>
        <input type="button" name="enviar" id="enviar" value="Enviar" onClick="download('appletv','iosappletv');">
        </div>
        <div id="mensageappletv"></div>

    <!-- SELECT AppleTV -->

    </form>

    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript">


            function clean(id){

                $(id).html('')

            }

            function cargar_ios(device,ios)
            {

                    var idevice = document.getElementById(device).value;

                    $("#"+ios).empty();
                    $("#"+ios).append("<option selected>-</option>");
                    $.post("/ios.php", {idevice: idevice}, function(data){

                        $("elemento", data).each(function (j) {

                            $("#"+ios).append("<option value='" + $(this).attr("item") + "'>" + $(this).attr("valor") + "</option>");

                        } );

                    });
            }


            function comprobar(id,device,ios){

                var idevice = document.getElementById(device).value;
                var ios = document.getElementById(ios).value;

                $.post("comprobar.php", {idevice: idevice, ios: ios}, function(data){

                                $("#"+id).html(data);

                });



                return false;

            }


              function download(device,ios){

                var idevice = document.getElementById(device).value;
                var ios = document.getElementById(ios).value;

                             $.post("download.php", {idevice: idevice, ios: ios}, function(data){

                                document.location = data

                });

                return false;

            }


	</script>
    
    </div>
    </body>
</html>
