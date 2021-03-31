<?php
require_once 'domain/Dao.php';
require_once 'domain/PlanFactory.php';
ini_set('display_errors', "On");


$plan = PlanFactory::create($_POST['date'], $_POST['time'], $_POST['plan-name']);

$date = $plan->date();
$time = $plan->time();
$plan_name = $plan->planName();

$dao = new Dao();
$dao->planInsert($date, $time, $plan_name);

header('Location: calendar.html');
