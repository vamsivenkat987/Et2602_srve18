<?php

class MyDataBase extends SQLite3{
	function __construct() {
		$this->open('mydb.db');
	}
}

$db = new MyDataBase();



$final = $db->exec('CREATE TABLE IF NOT EXISTS finalproject(IPADDRESS VARCHAR NOT NULL,VLAN VARCHAR NOT NULL,PORT VARCHAR,MACS VARCHAR)');
if(!$final){
   echo $db->lastErrorMsg();
}

$final = $db->exec('CREATE TABLE IF NOT EXISTS (ip VARCHAR NOT NULL,port VARCHAR NOT NULL,community STRING NOT NULL,version VARCHAR NOT NULL,firstprob VARCHAR NULL,lastprob VARCHAR NULL,failed_attempts INT DEFAULT 0 NOT NULL)');
if(!$final){
    echo $db->lastErrorMsg()
}










?>