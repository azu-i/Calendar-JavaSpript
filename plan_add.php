<?php
session_start();

//選択してる日にち・時間を変数へ
$hour = $_GET['hour'];
$selected_date = $_SESSION['selected_date'];
$date = new DateTime($selected_date);
$insert_date = $date->format('Y-m-d');


require 't_plan_add.php';