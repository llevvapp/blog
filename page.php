<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php 
$database = [
	[
		'title' => 'Прогноз погоды в Якутске на пятницу',
	'short' => 'Прогноз погоды в Якутске на пятницу',
	'long' => 'По данным синоптиков ЯУГМС, днем 7 июня в Якутске ожидается до плюс 26 градусов. 

«Без осадков, ветер северный 4-9 м/с, температура воздуха ночью +10+12, днем +24+26°», — сообщается на сайте ведомства.

Сегодня в четыре часа дня в городе зафиксировано + 25 градусов.'
	],
	[
		'title' => 'Глава Якутии личными средствами поддержал первого бойца UFC из Якутии Григория Попова',
	'short' => 'Айсен Николаев перевел на личный счет известного якутского спортсмена смешанных единоборств Григория Попова 100 тыс. рублей в качестве материальной помощи.',
	'long' => 'Айсен Николаев перевел на личный счет известного якутского спортсмена смешанных единоборств Григория Попова 100 тыс. рублей в качестве материальной помощи. Ил Дархан пожелал Григорию удачи в дебютном выступлении и призвал якутян поболеть за первого земляка, попавшего в UFC. Бой состоится в рамках турнира UFC 238 в Чикаго. 

Григорий Попов встретится с американцем Эдди Вайнлендом. Бойцы откроют предварительный кард турнира. По якутскому времени бой состоится в воскресенье в 7:20 утра.

Напомним, ранее в ходе прямого эфира главы Якутии в соцсети к нему обратились с просьбой оказать помощь спортсмену, который тренируется перед турниром в спартанских условиях и питается «Дошираком».

Дополнение: Григорий Попов сообщил в своей соцсети, что отказывается от финансовой помощи и просит направить деньги другим нуждающимся.

UFC (Ultimate Fighting Championship) считается наиболее успешной и популярной спортивной организацией в мире ММА (смешанные единоборства).',

]
];
 ?>
 <?php
 $index = $_GET['index'];
 echo '<div style="margin:auto">';
 echo '<h1>' . $database[$index]['title'] . '</h1> ';
  echo $database[$index]['long'];
  echo '</div>';
 ?>
</body>
</html>
