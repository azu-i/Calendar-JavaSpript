<?php
require_once 'domain/Dao.php';
require_once 'domain/PlanFactory.php';
ini_set('display_errors', "On");


$plan = PlanFactory::create($_POST['date'], $_POST['time'], $_POST['plan-name']);

$dao = new Dao();
$dao->planInsert($plan);

header('Location: calendar.html');
