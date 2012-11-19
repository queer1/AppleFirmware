<?php

    $db_name = "solsonorcultu";   
	$db_user = "solsonorcultu";        
	$db_passwd = "2J6i8pE4";          
	$db_server = "mysql51-36.pro"; 
	$dbcon = mysql_connect($db_server, $db_user, $db_passwd) or die(mysql_error());
	mysql_select_db($db_name) or die(mysql_error());

?>	