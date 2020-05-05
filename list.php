<?php
include(config.php);

$Final = $db->query('SELECT * FROM List');
while($row = $Final->fetchArray(SQLITE3_ASSOC) ) {
	echo  $row['ipaddress']. "|" .$row['vlan']. "|" .$row['portnumber']. "|" .$row['macaddress']. "\n";
}
$db->close();
?>