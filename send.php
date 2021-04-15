<?php
if (empty($_POST)) {
	die('POST запрос пуст');
}
if (!isset($_POST['name'])) {
	die('Отсутствует имя');
}
if (!isset($_POST['email'])) {
	die('Отсутствует email');
}
if (!isset($_POST['phone'])) {
	die('Отсутствует phone');
}
if (!isset($_POST['date'])) {
	die('Отсутствует date');
}
if (!isset($_POST['age'])) {
	die('Отсутствует age');
}

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

$message = '
<div class="wrapp">
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
	<h4>Ссылка на gitHub: <a href="https://github.com/catsblack773/form">https://github.com/catsblack773/form</a></h4>
	<h4>Ссылка на мой host: <a href="https://test2.neworia.ru/index.html">https://test2.neworia.ru/</a></h4>
	<p>Все файлы лежат в архиве</p>
</div>';

@mail('join@ecwid.com', 'Тестовое задание от CatsBlack773', $message);
@mail('catsblack773@gmail.com', 'Тестовое задание от CatsBlack773', $message, $headers);

header('Location: /?redirect=ok');
exit;