<?php
include 'lib/ts3admin.class.php';
	
	$ts3connect = new ts3admin($config['IP'], $config['port']);
	if ($ts3connect->getElement('success', $ts3connect->connect())){
		$ts3connect->login($config['testowyBocik'],$config['3GpXRdIq']);
		$ts3connect->selectServer($config['ID']);
		$ts3connect->setName('testowyBocik');
		
		
		
		
	}
?>