<?php
session_start();

//選択してる日にち・時間を変数へ
$selected_hour = $_GET['selected_hour'];
$hour = new Datetime($selected_hour. ":00");
$insert_hour = $hour->format('H:i');

$selected_date = $_SESSION['selected_date'];
$date = new DateTime($selected_date);
$insert_date = $date->format('Y-m-d');


require 't_plan_add.php';