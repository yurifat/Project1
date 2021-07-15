<?php
	require_once('../app/connect.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script>

	<style type="text/css">
	.table-pg{width:auto}
	</style>
</head>
<body>

  	<nav class="navbar navbar-default">
		<div class="container-fluid">
	      	<a class="navbar-brand" href="#">PG Restaurant</a>
	 	</div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      	<ul class="nav navbar-nav">
		        <li><a href="/">Логин</a></li>
		        <li class = "active"><a href="Main.php">Главная</a></li>
				<li><a href="dish/dish.php">Блюдо</a></li>
				<li><a href="drinks/drinks.php">Напитки</a></li>
				<li><a href="order/order.php">Заказы</a></li>
				<li><a href="storage/storage.php">Cклад</a></li>
				<li><a href="employees/emp.php">Сотрудники</a></li>
				<li><a href="positions/pos.php">Должности</a></li>
	        </ul>
	    </div>
    </nav>
    <h1>
    	Выберите таблицу в окне навигации!
    </h1>
</body>
</html>