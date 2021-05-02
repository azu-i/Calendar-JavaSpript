<?php
require_once (__DIR__ . '/../vendor/autoload.php');
use app\domain\Dao;

$dao = new Dao();
$allPlans = $dao->findAll();

require(__DIR__ . '/main/index.php');