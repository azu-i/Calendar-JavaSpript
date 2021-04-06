<?php 
require_once 'domain/Dao.php';

$dao = new Dao();
$all_plans = $dao->findAll();

require 'view/all_plans.php';


