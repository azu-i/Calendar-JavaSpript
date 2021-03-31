<?php
require_once 'domain/Dao.php';

session_start();
$id = $_POST['id'];

$dao = new Dao();
$dao->planDelete($id);
header('Location: all_plans.php');
