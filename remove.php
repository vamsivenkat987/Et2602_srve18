<?php
	include('config.php');
	
	
	

	$A = <<<EOF
	  delete from info if ip = "$_GET[ip]"
EOF;

	$final = $db->exec($A);
	if (!$final){
		echo "FALSE in the removing of ip address"
	}
	else{
		echo"ok removing is done sucessfully"
	}
	
	
	
	$db->close();

?>