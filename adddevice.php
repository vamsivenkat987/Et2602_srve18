<?php

include('config.php');



if(empty($_GET['ipaddress']) || empty($_GET['portnumber']) || empty($_GET['community']) || empty($_GET['version'])) {
    echo "Give an valid input of ipaddress, portnumber, community and the version " ;   
}

else {

    $db->exec("INSERT INTO manager (IP,PORT,COMMUNITY,VERSION) VALUES ('$_GET['ipaddress']','$_GET['portnumber']','$_GET['community']','$_GET['version']')");
        echo "\n";
        echo "OK";
    
    }
$db->close();

?>