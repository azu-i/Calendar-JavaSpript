<?php
require_once (__DIR__ . '/Plan.php');
require_once (__DIR__ . '/Date.php');
require_once (__DIR__ . '/Time.php');
require_once (__DIR__. '/PlanName.php');
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
