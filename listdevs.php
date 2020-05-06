<?php
include(config.php);
$Final = $db->query('SELECT * FROM manager');
while ($ListDevice = $Final->fetchArray()) {
	echo "\n";
	echo $ListDevice[0]. "|" .$ListDevice[1]. "|" .$ListDevice[2]. "|" .$ListDevice[3]. "|" .$ListDevice[4]. "|" .$ListDevice[5]. "|" .$ListDevice[6]."|";

    if (empty($ListDevice[0]) && empty($ListDevice[1]) && empty($ListDevice[2]) && empty($ListDevice[3]) && empty($ListDevice[4]) && empty($ListDevice[5]) &&  empty($ListDevice[6])){
    	echo "if list are empty then there is no data in the lists";

    }







?>