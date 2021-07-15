<?php
		require_once('../../app/connect.php');
		
		$queryDelete = ("DELETE FROM storage WHERE id = '$_POST[ID]'");
		$resDel = pg_query($dbconnect,$queryDelete);


		if($resDel)
		{
			header('location:storage.php');
		}

?>