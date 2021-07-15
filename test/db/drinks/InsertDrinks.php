<?php

	require_once('../../app/connect.php');

		$queryInsert = "INSERT INTO drinks VALUES (nextval('drinks_id_seq'::regclass),'$_POST[Name]', '$_POST[price]' , '$_POST[extracharge]','$_POST[quantity]')";
		$result = pg_query($dbconnect,$queryInsert);

		if($result)
		{
			header('location:drinks.php');
		}


?>