<?php
require_once (__DIR__ . '/../domain/Dao.php');

session_start();
$id = $_POST['id'];

$dao = new Dao();
$dao->planDelete($id);
header('Location: http://l-calendar.com/allPlans');
