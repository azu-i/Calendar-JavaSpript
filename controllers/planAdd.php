<?php
session_start();
//選択してる日にちは'Y-m-d'型に
$selected_date = $_SESSION['selected_date'];

$date = new DateTime($selected_date);
$insert_date = $date->format('Y-m-d');

//時間は'H:i'型にする
$selected_hour = $_GET['selected_hour'];

$hour = new Datetime($selected_hour.":00");
$insert_hour = $hour->format('H:i');

require (__DIR__ . '/../planAdd/index.php');
