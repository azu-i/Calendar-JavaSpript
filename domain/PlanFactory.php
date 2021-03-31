<?php
require_once 'Plan.php';
require_once 'Date.php';
require_once 'Time.php';
require_once 'PlanName.php';
ini_set('display_errors', "On");

class PlanFactory
{
  public static function create(string $date, string $time, string $plan_name): Plan
  {
    return new Plan(
      new Date($date),
      new Time($time),
      new PlanName($plan_name)
    );
  }
}
