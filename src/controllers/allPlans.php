<?php 
require (__DIR__ . '/../domain/Dao.php');
ini_set('display_errors', "On");

$dao = new Dao();
$allPlans = $dao->findAll();




