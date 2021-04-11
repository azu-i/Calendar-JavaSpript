<?php 
require_once (__DIR__ . '/domain/Dao.php');

$dao = new Dao();
$all_plans = $dao->findAll();

require (__DIR__ . '/../views/all_plans.php');


