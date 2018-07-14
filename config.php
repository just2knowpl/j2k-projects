<?php
	/********************************

	Config File

	********************************/
$db['host'] = 'localhost';
$db['login'] = 'root';
$db['password'] = 'x';
$db['database'] = 'gbot';

$config['instance']['1']['connection'] = array
(
	/*****************************************************

	 		LOGIN TO TEAMSPEAK3 SERVER 

	******************************************************/
		
	//TeamSpeak3 Server IP Adress

		'IP' 			=> '37.228.132.129',
		

	//TeamSpeak3 Server Query Port

		'query_port'		=> '10011',


	//TeamSpeak3 Server Port

		'port' 			=> '9987',


	//TeamSpeak3 Server Query Login

		'login' 		=> 'serveradmin',


	//TeamSpeak3 Server Query Password

		'password' 		=> 'x',


	//Bot Nickname

		'bot_name' 		=> 'GWM Administrator',


	//Bot Default Channel

		'default_channel' 	=> '2', 


	//Bot interval (in seconds)
		
		'interval' => 1,

);



$config['instance']['1']['logs_system'] = array
(


	'logs' => array
	(
		'enabled' => true,  		// true or false (logs system)
	),


);

?>