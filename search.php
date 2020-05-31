<?php
  include("config.php");
  $searchingmac = $_GET[mac];
  $sql = <<<EOF
              SELECT * where mac like "%$searchingmac%" by mac;
EOF;

	$final = $db->query($sql);
	while($row = $final->fetchArray(SQLITE3_ASSOC) ) {
      echo   $row['IPADDRESS']." | ".$row['VLAN']." | ".$row['PORTNUMBER']." | "."$searchstr"."\n";
   }

   $db->close();








?>