<?php

class Plan 
{
  private $date;
  private $time;
  private $planName;

  public function __construct(Date $date, Time $time, PlanName $planName)
  {
    $this->date = $date;
    $this->time = $time;
    $this->planName = $planName;
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
    return $this->planName->scheduleName();
  }
}