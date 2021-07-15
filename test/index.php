<?php
	session_start();
	require_once('app/connect.php');

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SignIn</title>
	<link rel="stylesheet" href="app/style1.css">
</head>
<body>
	<form action="app/handler.php" method="post">
		<label>Логин</label>
		<input type="text" name="login" placeholder="Введите логин">
		<label>Пароль</label>
		<input type="password" name="password" placeholder="Введите пароль">
		<button type="submit">Войти</button>	
	</form>
</body>
</html>