<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Форма обратной связи</title>
	<link rel="stylesheet" type="text/css" href="css/style.css?v1">
</head>
<body>
	<div class="form-wrapp">
		<div class="alert"></div>
		<form name="myForm" class="my-form" action="send.php" method="POST">
			<div class="form-group">
				<label for="name">Имя</label>
				<input type="text" name="name" id="name" placeholder="Введите Ваше имя" />
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" id="email" placeholder="Введите Ваш Email" />
			</div>
			<div class="form-group">
				<label for="phone">Телефон</label>
				<input type="phone" name="phone" id="phone" placeholder="Введите Ваш телефон" />
			</div>
			<div class="form-group">
				<label for="date">Дата рождения</label>
				<input type="date" name="date" id="date" value="1990-04-03">
			</div>
			<div class="form-group">
				<label for="age">Возраст</label>
				<input type="number" name="age" id="age" placeholder="Введите Ваш возраст" />
			</div>
			<div class="form-group">
				<input type="submit" class="btn" />
			</div>
		</form>
	</div>
	<script type="text/javascript" src="js/script.js?v1"></script>
</body>
</html>
