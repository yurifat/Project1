<?php
	session_start();
	require_once('connect.php');


	$login = $_POST['login'];
	$password = $_POST['password'];

	$check_user = pg_query("SELECT * FROM users WHERE login = '$login' AND password = '$password'");
	


	$result = pg_num_rows($check_user);

	if($result > 0)
	{
		header('location:../db/Main.php');
	}
	{
		echo 'Не удалось подключиться';
	}

?>