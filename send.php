<?php
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

$message = '
<div class="wrapp" style="width: 300px;">
	<div style="padding: 5px;border-bottom: 1px solid #ececec;">
		<span style="margin-right: 5px">Имя:</span>
		<span>'.$_POST['name'].'</span>
	</div>
	<div style="padding: 5px;border-bottom: 1px solid #ececec">
		<span style="margin-right: 5px">Email:</span>
		<span>'.$_POST['email'].'</span>
	</div>
	<div style="padding: 5px;border-bottom: 1px solid #ececec">
		<span style="margin-right: 5px">Телефон:</span>
		<span>'.$_POST['phone'].'</span>
	</div>
	<div style="padding: 5px;border-bottom: 1px solid #ececec">
		<span style="margin-right: 5px">Дата рождения:</span>
		<span>'.date('d.m.Y', strtotime($_POST['date'])).'</span>
	</div>
	<div style="padding: 5px;">
		<span style="margin-right: 5px">Возраст:</span>
		<span>'.$_POST['age'].' лет</span>
	</div>
</div>';

@mail('join@ecwid.com', 'Тестовое задание от CatsBlack773', $message);
@mail('catsblack773@gmail.com', 'Тестовое задание от CatsBlack773', $message, $headers);
