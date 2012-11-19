<?php

include('Conexiones.php');

	$modelo = mysql_real_escape_string($_REQUEST['idevice']);
	$ios = mysql_real_escape_string($_REQUEST['ios']);

	$sql = "select url from firmwares where idevice= '$modelo' and nombreios= '$ios'";
	$res = mysql_query($sql) or die(mysql_error());


	while($r=mysql_fetch_assoc($res))
	{
		$url	= $r['url'];

	}

        echo $url;

?>