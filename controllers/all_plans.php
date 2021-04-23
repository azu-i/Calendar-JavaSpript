<?php 
require (__DIR__ . '/domain/Dao.php');
ini_set('display_errors', "On");

$dao = new Dao();
$all_plans = $dao->findAll();

require_once (__DIR__ . '/../allPlans/index.php');


