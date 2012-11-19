<?php

/*Conexión producción */

        $db_name = "solsonorcultu";   
	$db_user = "solsonorcultu";        
	$db_passwd = "2J6i8pE4";          
	$db_server = "mysql51-36.pro"; 
	$dbcon = mysql_connect($db_server, $db_user, $db_passwd) or die(mysql_error());
	mysql_select_db($db_name) or die(mysql_error());

        
        
/*Conexión Local 
        
        $db_name = "applefirmwares";    
	$db_user = "root";        
	$db_passwd = "root";        
	$db_server = "localhost"; 
	$dbcon = mysql_connect($db_server, $db_user, $db_passwd) or die(mysql_error());
	mysql_select_db($db_name) or die(mysql_error());
*/

function iphone(){

    $sql = "SELECT DISTINCT idevice FROM firmwares where idevice like 'iphone%' ORDER BY idevice ASC";
    $res = mysql_query($sql) or die(mysql_error());
        while($r=mysql_fetch_assoc($res)){
            $idevice= stripslashes($r['idevice']);
            echo '<option value="'.$idevice.'">'.$idevice.'</option>';
        }
    mysql_free_result($res);
}

function ipod(){

    $sql = "SELECT DISTINCT idevice FROM firmwares where idevice like 'ipod%' ORDER BY idevice ASC";
    $res = mysql_query($sql) or die(mysql_error());
        while($r=mysql_fetch_assoc($res)){
            $idevice= stripslashes($r['idevice']);
            echo '<option value="'.$idevice.'">'.$idevice.'</option>';
        }
    mysql_free_result($res);
}

function ipad(){

    $sql = "SELECT DISTINCT idevice FROM firmwares where idevice like 'ipad%' ORDER BY idevice ASC";
    $res = mysql_query($sql) or die(mysql_error());
        while($r=mysql_fetch_assoc($res)){
            $idevice= stripslashes($r['idevice']);
            echo '<option value="'.$idevice.'">'.$idevice.'</option>';
        }
    mysql_free_result($res);
}

function appletv(){

$sql = "SELECT DISTINCT idevice FROM firmwares where idevice like 'apple%' ORDER BY idevice ASC";
    $res = mysql_query($sql) or die(mysql_error());
        while($r=mysql_fetch_assoc($res)){
            $idevice= stripslashes($r['idevice']);
            echo '<option value="'.$idevice.'">'.$idevice.'</option>';
        }
    mysql_free_result($res);
}
?>