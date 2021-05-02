<?php
require_once (__DIR__ . '/../../vendor/autoload.php');
use app\controllers\Insert;

session_start();

$insert = new Insert($_GET['date'], $_GET['time'], $_GET['plan-name']);
$insert->planInsert();
header('Location: /');