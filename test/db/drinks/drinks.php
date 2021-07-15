<?php 
	require_once('../../app/connect.php');

	$query = 'SELECT * FROM drinks';
	$result = pg_query($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
		        <li><a href="../Main.php">Главная</a></li>
				<li><a href="../dish/dish.php">Блюдо</a></li>
				<li class = "active"><a href="drinks.php">Напитки</a></li>
				<li><a href="../order/order.php">Заказы</a></li>
				<li><a href="../storage/storage.php">Cклад</a></li>
				<li><a href="../employees/emp.php">Сотрудники</a></li>
				<li><a href="../positions/pos.php">Должности</a></li>
	        </ul>
	    </div>
    </nav>
	<p><h3><strong>Добавить запись в БД: </strong></h3></p> 

		<form method="post" action="InsertDrinks.php"> 
			<input type="text" name="Name" placeholder = "Название напитка">
			<input type="number" name="price" placeholder = "Цена(руб)">
			<input type="number" name="extracharge" placeholder = "Наценка(руб)">
			<input type="number" name="quantity" placeholder = "Кол-во">
			<button type="submit">Добавить</button>
		</form>	
	<p><h3><strong>Удаление записи по ID: </strong></h3></p>
		<form action="DeleteDrinks.php" method="post">
			<input type="number" name="ID" placeholder="Введите ID удаляемой строки">
			<button type="submit">Удалить</button>
		</form>
	<div class="container-fluid">
		<table class="table">
			<thead>
				<tr>
					<th scope="row">#</th>
				    <th>Название напитка</th>
				    <th>Цена(руб)</th>
				    <th>Наценка(руб)</th>
				    <th>Кол-во</th>
				</tr>
			</thead>
		  	<tbody>
				<?php
					while ($line = pg_fetch_assoc($result)) 
					{
						echo "<tr>";
						foreach ($line as $col_value) 
							{
								echo "<td>$col_value</td>";
							}
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>