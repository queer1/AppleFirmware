<?php
	header('Content-Type: text/xml;');
	include($_SERVER['DOCUMENT_ROOT'] . '/php/config.php');
	dbconnect();
	
	$id_dispositivo = mysql_real_escape_string($_REQUEST['id_dispositivo']);
	$id_modelo		= mysql_real_escape_string($_REQUEST['id_modelo']);
	$id_ios			= mysql_real_escape_string($_REQUEST['id_ios']);
	
	$sql = "SELECT DISTINCT c.id_baseband, b.baseband
			FROM jf_combinaciones as c, jf_modelos as m, jf_ios as i, jf_baseband as b
			WHERE c.id_modelo = m.id_modelo
			  AND c.id_ios = i.id_ios
			  AND c.id_baseband = b.id_baseband
			  AND c.id_dispositivo = '$id_dispositivo'
			  AND c.id_modelo = '$id_modelo'
			  AND i.estado = '1'
			  AND m.estado = '1'
			  AND b.estado = '1'";	
	$res = mysql_query($sql) or die(mysql_error());
	$xml = "<?xml version='1.0' encoding='UTF-8'?><elementos>";
	while($r=mysql_fetch_assoc($res))
	{
		$id_baseband	= $r['id_baseband'];
		$baseband		= stripslashes($r['baseband']);
		
		$xml .= '<elemento tipus="id_baseband" item="'.$id_baseband.'" valor="'.$baseband.'"></elemento>';
	}
	mysql_free_result($res);
	
	print_r ($xml."</elementos>");
?>