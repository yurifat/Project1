<?php

	require_once('../../app/connect.php');

		$queryInsert = "INSERT INTO positions VALUES (nextval('positions_id_seq'::regclass),'$_POST[Name]', '$_POST[Salary]' , '$_POST[Duties]')";
		$result = pg_query($dbconnect,$queryInsert);

		if($result)
		{
			header('location:pos.php');
		}


?>

<div></div>