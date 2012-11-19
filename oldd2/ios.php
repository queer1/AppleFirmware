<?php

include('Conexiones.php');
	
	$modelo = mysql_real_escape_string($_REQUEST['idevice']);

	$sql = "select DISTINCT nombreios from firmwares where idevice= '$modelo' order by nombreios desc";	
	$res = mysql_query($sql) or die(mysql_error());
	
	$xml = "<?xml version='1.0' encoding='UTF-8'?><elementos>";
	while($r=mysql_fetch_assoc($res))
	{
		$nombreios	= $r['nombreios'];
		
	$xml .= '<elemento tipus="nombreios" item="'.$nombreios.'" valor="'.$nombreios.'"></elemento>';
	}
	mysql_free_result($res);
	
	print_r ($xml."</elementos>");
	
?>