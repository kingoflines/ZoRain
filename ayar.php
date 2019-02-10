<?php
    //$user="kingofli_kingofl";
    //$pass="kingofli42";
    //$db=new PDO("mysql:host=77.245.159.14;dbname=kingofli_again1",$user,$pass);	
    $user="root";
    $pass="";
    $db=new PDO("mysql:host=localhost;dbname=again2",$user,$pass);
	$db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");
    
?>