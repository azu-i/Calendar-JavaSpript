<?php
session_start();
//選択してる日にちは'Y-m-d'型に
$selectedDate = $_SESSION['selectedDate'];

$date = new DateTime($selectedDate);
$insertDate = $date->format('Y-m-d');

//時間は'H:i'型にする
$selectedHour = $_GET['selectedHour'];

$hour = new Datetime($selectedHour.":00");
$insertHour = $hour->format('H:i');

require (__DIR__ . '/../planAdd/index.php');
