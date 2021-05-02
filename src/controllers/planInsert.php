<?php
namespace app\controllers;

require_once(__DIR__ . '/../../vendor/autoload.php');
ini_set('display_errors', "On");

use app\domain\PlanFactory;
use app\domain\Dao;

class Insert
{
  public function __construct(string $date, string $time, string $planName)
  {
    $this->date = $date;
    $this->time = $time;
    $this->planName = $planName;
  }

  public function planInsert(): void
  {
    $plan = PlanFactory::create($this->date, $this->time, $this->planName);
    $dao = new Dao();
    $dao->planInsert($plan);
  }
}
