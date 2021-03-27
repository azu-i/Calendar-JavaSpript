<?php
require 'domain/Dao.php';
ini_set('display_errors', "On");

$date = $_POST['date'];
$time = $_POST['time'];
$plan_name = $_POST['plan-name'];

$dao = new Dao();
$dao->planInsert($date, $time, $plan_name);

header('Location: calendar.html');
