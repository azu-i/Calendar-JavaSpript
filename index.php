<?php
require_once(__DIR__ . '/controllers/domain/Dao.php');

$dao = new Dao();
$all_plans = $dao->findAll();

require (__DIR__ . '/views/calendar.html');