<?php

include('Connections/prod.php');

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