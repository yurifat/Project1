<?php

	require_once('../../app/connect.php');

		$queryInsert = "INSERT INTO storage VALUES (nextval('storage_id_seq'::regclass),'$_POST[NameIng]', '$_POST[quantity]')";
		$result = pg_query($dbconnect,$queryInsert);

		if($result)
		{
			header('location:storage.php');
		}


?>