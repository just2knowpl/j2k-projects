<?php
require_once 'lib/ts3admin.class.php';
require 'config.php';
	$ts3connect = new ts3admin($config['IP'], $config['query']);
	if ($ts3connect->getElement('success', $ts3connect->connect())){
		$ts3connect->login($config['login'],$config['haslo']);
		$ts3connect->selectServer($config['port']);
		$ts3connect->setName('nazwa');
		$core = $ts3connect->getElement('data',$ts3connect->whoAmI());
		$ts3connect->clientMove($core['client_id'],$config['kanal']);
		sleep(2);
		
		while (1)
			{
				//pobranie ikony rangi czy inny chuj weie do czego to jest. Na chuj? nie wiem xD
				$icon = $ts3connect->getIconByID($config['iconTest']);
				//podmienienie ikony, chujowo, ale powinno działać
				if ($config['f_1'] == true) {
					$ts3connect->uploadIcon($config['icon_which_1'], $config['icon_1']);
					sleep($config['time_1']);
					$ts3connect->uploadIcon($config['icon_which_2'], $config['icon_1']);
					sleep($config['time_2']);
					$ts3connect->uploadIcon($config['icon_which_3'], $config['icon_1']);
					sleep($config['time_3']);
					sleep($config['interval']);
				}
				else
				{
					break;
				}
				break;

			}
		
		
		sleep($config['interval']);
	}
?>