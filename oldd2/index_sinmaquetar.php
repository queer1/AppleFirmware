<?php	
include('Conexiones.php');
?>	
<html>
<body>

<form method="post" action="/" class="form">

<!-- SELECT IPHONE -->
    <H3>iPhone</H3>
    <label for="iphone">Dispositivo</label>

        <select name="iphone" id="iphone" onChange="clean('iphone');clean('info');cargar_ios(this.name,'iosiphone');">
        <option value="">-</option>

            <?php
            iPhone();
            ?>

        </select>

    <label for="iosiphone">iOS</label>
    <select name="iosiphone" id="iosiphone" onChange="clean('mensageiphone');"></select>
    <input type="button" name="enviar" id="enviar" value="Enviar" onClick="comprobar('mensageiphone','iphone','iosiphone');">
    <div id="mensageiphone"></div>

<!-- SELECT IPHONE -->

<!-- SELECT IPOD -->
    <H3>iPod</H3>
    <label for="ipod">Dispositivo</label>

        <select name="ipod" id="ipod" onChange="clean('ipod','mensageiphone');cargar_ios(this.name,'iosipod');">
        <option value="">-</option>

            <?php
            ipod();
            ?>

        </select>

    <label for="iosipod">iOS</label>
    <select name="iosipod" id="iosipod" onChange="clean('mensageipod');"></select>
    <input type="button" name="enviar" id="enviar" value="Enviar" onClick="comprobar('mensageipod','ipod','iosipod');">
    <div id="mensageipod"></div>

<!-- SELECT IPOD -->

<!-- SELECT IPAD -->

    <H3>iPad</H3>
    <label for="ipad">Dispositivo</label>

        <select name="ipad" id="ipad" onChange="clean('ipad');cargar_ios(this.name,'iosipad');">
        <option value="">-</option>

            <?php
            ipad();
            ?>

        </select>

    <label for="ipad">iOS</label>
    <select name="iosipad" id="iosipad" onChange="clean('mensageipad');"></select>
    <input type="button" name="enviar" id="enviar" value="Enviar" onClick="comprobar('mensageipad','ipad','iosipad');">
    <div id="mensageipad"></div>

<!-- SELECT IPAD -->

<!-- SELECT AppleTV -->

    <H3>Apple TV</H3>
    <label for="appletv">Dispositivo</label>

        <select name="appletv" id="appletv" onChange="clean('appletv');cargar_ios(this.name,'iosappletv');">
        <option value="">-</option>

            <?php
            appletv();
            ?>

        </select>

    <label for="iosappletv">iOS</label>
    <select name="iosappletv" id="iosappletv" onChange="clean('mensageappletv');"></select>
    <input type="button" name="enviar" id="enviar" value="Enviar" onClick="comprobar('mensageappletv','appletv','iosappletv');">
    <div id="mensageappletv"></div>

<!-- SELECT AppleTV -->


    <div style = "float: left; height: 128px; width: 128px; border: 1px #000; "><img src="/img/ipod.png" alt=""/></div>
    <div style = "float: right; height: 75px; width: 350px;border: 1px #000;">aaaaaaaaa</div>

  
</form>  

    <script type="text/javascript" src="jquery-1.4.2.min.js"></script>
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
                                document.location = data;

                });

                return false;

            }

	</script>

</body>
</html>