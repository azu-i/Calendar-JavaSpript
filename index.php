<?php
require_once(__DIR__ . '/domain/Dao.php');

$dao = new Dao();
$allPlans = $dao->findAll();

require(__DIR__ . '/main/index.php');