<?php

include('config.php');

$ip_address = $_GET['ipaddress'];
$port_number = $_GET['portnumber'];
$community = $_GET['community'];
$version = $_GET['version'];

if(empty($ip_address) || empty($port_number) || empty($community) || empty($version)) {
    echo "please provide proper input" ;   
}

else {

    $db->exec("INSERT INTO info (IP,PORT,COMMUNITY,VERSION) VALUES ('$ip_address','$port_number','$community','$version')");
        echo "\n";
        echo "OK";
    
    }
$db->close();

?>