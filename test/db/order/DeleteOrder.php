<?php
		require_once('../../app/connect.php');
		
		$queryDelete = ("DELETE FROM \"Zakaz\"WHERE id = '$_POST[ID]'");
		$resDel = pg_query($dbconnect,$queryDelete);


		if($resDel)
		{
			header('location:order.php');
		}

?>