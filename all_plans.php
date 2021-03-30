<?php 
require_once 'domain/Dao.php';

$dao = new Dao();
$plans = $dao->findAll();

 header('Location: t_all_plans.php');


