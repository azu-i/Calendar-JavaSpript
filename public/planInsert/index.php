<?php
require_once (__DIR__ . '/../../vendor/autoload.php');
use app\controllers\PlanInsert;

session_start();

$insert = new PlanInsert($_GET['date'], $_GET['time'], $_GET['plan-name']);
$insert->planInsert();
header('Location: /');