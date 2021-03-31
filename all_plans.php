<?php 
require_once 'domain/Dao.php';

$dao = new Dao();
$all_plans = $dao->findAll();

require 't_all_plans.php';


