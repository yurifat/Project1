<?php

	require_once('../../app/connect.php');

		$queryInsert = "INSERT INTO \"Zakaz\" VALUES (nextval('order_id_seq'::regclass),'$_POST[IDdish]', '$_POST[IDdrink]' , '$_POST[Date]','$_POST[NbrTable]', '$_POST[IDemp]')";
		$result = pg_query($dbconnect,$queryInsert);

		if($result)
		{
			header('location:order.php');
		}


?>