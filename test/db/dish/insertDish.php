<?php

	require_once('../../app/connect.php');

		$queryInsert = "INSERT INTO dish VALUES (nextval('dish_id_seq'::regclass),'$_POST[Name]', '$_POST[price]' , '$_POST[extracharge]')";
		$result = pg_query($dbconnect,$queryInsert);

		if($result)
		{
			header('location:dish.php');
		}


?>