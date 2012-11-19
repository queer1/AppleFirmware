<?php
	header('Content-Type: text/xml;');
	include($_SERVER['DOCUMENT_ROOT'] . '/php/config.php');
	dbconnect();
	
	$idevice = mysql_real_escape_string($_REQUEST['idevice']);
	
	$sql = "select distinct idevice from firmwares where idevice= '$idevice' order by nombreios desc";	
	$res = mysql_query($sql) or die(mysql_error());
	$xml = "<?xml version='1.0' encoding='UTF-8'?><elementos>";
	while($r=mysql_fetch_assoc($res))
	{
	
		$modelo		= stripslashes($r['idevice']);
		
		$xml .= '<elemento tipus="id_modelo" item="'.$modelo.'" valor="'.$modelo.'"></elemento>';
	}
	mysql_free_result($res);
	
	print_r ($xml."</elementos>");
?>