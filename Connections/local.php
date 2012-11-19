<?php

    $db_name = "applefirmwares";    
	$db_user = "root";        
	$db_passwd = "root";        
	$db_server = "localhost"; 
	$dbcon = mysql_connect($db_server, $db_user, $db_passwd) or die(mysql_error());
	mysql_select_db($db_name) or die(mysql_error());

?>	