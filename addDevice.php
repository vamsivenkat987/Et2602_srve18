<?php

include('config.php');



if(empty($_GET['ip']) || empty($_GET['port']) || empty($_GET['community']) || empty($_GET['version'])) {
    echo "Give an valid input of ipaddress, portnumber, community and the version " ;   
}

else {

    $db->exec("INSERT INTO manager (IP,PORT,COMMUNITY,VERSION) VALUES ('$_GET['ip']','$_GET['port']','$_GET['community']','$_GET['version']')");
        echo "\n";
        echo "OK";
    
    }
$db->close();

?>