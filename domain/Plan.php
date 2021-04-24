<?php

class Plan 
{
  private $date;
  private $time;
  private $plan_name;

  public function __construct(Date $date, Time $time, PlanName $plan_name)
  {
    $this->date = $date;
    $this->time = $time;
    $this->plan_name = $plan_name;
  }

  public function date()
  {
    return $this->date->day();
  }

  public function time()
  {
    return $this->time->hour();
  }

  public function planName()
  {
    return $this->plan_name->scheduleName();
  }
}