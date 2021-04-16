<?php
if (empty($_POST)) {
	echo json_encode(['res' => false, 'message' => 'Форма не может быть пустой']);
	die;
}

if (!isset($_POST['name']) || empty($_POST['name'])) {
	echo json_encode(['res' => false, 'message' => 'Отсутствует поле имени']);
	die;
}
if (!isset($_POST['email']) || empty($_POST['email'])) {
	echo json_encode(['res' => false, 'message' => 'Отсутствует поле Email']);
	die;
}
if (!isset($_POST['phone']) || empty($_POST['phone'])) {
	echo json_encode(['res' => false, 'message' => 'Отсутствует поле телефон']);
	die;
}
if (!isset($_POST['date']) || empty($_POST['date'])) {
	echo json_encode(['res' => false, 'message' => 'Отсутствует поле дата рождения']);
	die;
}
if (!isset($_POST['age']) || empty($_POST['age'])) {
	echo json_encode(['res' => false, 'message' => 'Отсутствует поле возраст']);
	die;
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

//@mail('join@ecwid.com', 'Тестовое задание от CatsBlack773', $message);
@mail('catsblack773@gmail.com', 'Тестовое задание от CatsBlack773', $message, $headers);

echo json_encode(['res' => true, 'message' => 'Сообщение успешно отправлено']);
die;
