<?php

	require_once('../../app/connect.php');

		$queryInsert = "INSERT INTO employees VALUES (nextval('employees_id_seq'::regclass),'$_POST[IDpos]', '$_POST[Fname]' , '$_POST[Sname]','$_POST[Mname]','$_POST[Age]','$_POST[Tel]','$_POST[Adress]')";
		$result = pg_query($dbconnect,$queryInsert);

		if($result)
		{
			header('location:emp.php');
		}


?>