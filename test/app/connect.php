<?php
	
	$dbconnect = pg_connect("host=127.0.0.1 port=5432 dbname=restaurant user=Admin password=admin");

	if (!$dbconnect)
	{
		echo 'Не удалось установить подключение';
		echo pg_last_error($dbconnect);
		die();
	}
?>