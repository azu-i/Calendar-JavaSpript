<?php

namespace app\controllers;

require_once(__DIR__ . '/../../vendor/autoload.php');

use app\domain\Dao;

ini_set('display_errors', "On");

class allPlans
{
  public function allPlans()
  {
    $dao = new Dao();
    $allPlans = $dao->findAll();
    return $allPlans;
  }
}
