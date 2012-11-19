<?php

	$db_name = "applefirmwares";    /*Base de Datos*/
	$db_user = "root";        /*Usuario BBDD*/
	$db_passwd = "root";          /*Pass Usuario BBDD*/
	$db_server = "localhost"; /*Servidor BBDD*/
	$dbcon = mysql_connect($db_server, $db_user, $db_passwd) or die(mysql_error());
	mysql_select_db($db_name) or die(mysql_error());
	
	$modelo = mysql_real_escape_string($_REQUEST['idevice']);
	$ios = mysql_real_escape_string($_REQUEST['ios']);

	$sql = "select url from firmwares where idevice= '$modelo' and nombreios= '$ios'";	
	$res = mysql_query($sql) or die(mysql_error());
	
	

	
	while($r=mysql_fetch_assoc($res))
	{
		$url	= $r['url'];
	
	}
	$si = 'Puedo hacer Jailbreak ha este firmware? Haz Click Aquí';
        echo '<div id="info" style="clear: both;border:1px solid #dcdc41; background:url(/img/bullet_info.gif) no-repeat 10px 5px #ffffb5; width: 260px; height: 3px; margin: 0 auto; font-size:11px; padding:10px 10px 10px 28px; text-align:left;">'.$si.'</div>';


		
?>