<?php
// require_once (__DIR__ . '/../domain/Dao.php');
namespace app\controllers;
require_once (__DIR__ . '/../../vendor/autoload.php');

use app\domain\Dao;

session_start();
$id = $_POST['id'];

$dao = new Dao();
$dao->planDelete($id);
header('Location: /allPlans');
