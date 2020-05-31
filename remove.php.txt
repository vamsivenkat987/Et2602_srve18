<?php

include_once('config.php');


if(empty($_GET['ip']) || empty($_GET['port'])||empty($_GET['community']) || empty($_GET['version']) {
    echo "FALSE";
}

else {
    $removedevice = $db->exec("DELETE FROM info WHERE ip='$ip' AND port='$port'AND community='$community' AND version='$version'");
    if(!$removedevice){
        echo "Failed to remove";
    }
    else {
        echo "OK Removed";
    }

}

$db->close();

?>