<?php
include_once('config.php');

$output = $db->query('SELECT * FROM info');


while ($device_info = $output->fetchArray()) {	
	echo "\n";
	echo $device_info[0]. "|" .$device_info[1]. "|" .$device_info[2]. "|" .$device_info[3]. "|" .$device_info[4]. "|" .$device_info[5]. "|" .$device_info[6]."|";

    if (empty($device_info[0]) && empty($device_info[1]) && empty($device_info[2]) && empty($device_info[3]) && empty($device_info[4]) && empty($device_info[5]) &&  empty($device_info[6])){
    	echo "there is no data";

    }

}


$db->close();

?>