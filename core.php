<?php
include 'lib/ts3admin.class.php';
	
	$ts3connect = new ts3admin($config['IP'], $config['port']);
	if ($ts3connect->getElement('success', $ts3connect->connect())){
		$ts3connect->login($config['login'],$config['haslo']);
		$ts3connect->selectServer($config['ID']);
		$ts3connect->setName('nazwa');
		while (1)
			{
				$core = $ts3connect->getElement('data',$ts3connect->whoAmI());
				$ts3connect->clientMove($core['client_id'],id kanału);	
			}
		
		
		
	}
?>