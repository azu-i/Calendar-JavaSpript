<?php

class PlanName
{
  private $plan_name;

  public function __construct($plan_name)
  {
    try {
      if (strlen($plan_name) > 20) {
        throw new Exception('予定名は20文字以下で入力してください');
      }
      if (empty($plan_name)) {
        throw new Exception('予定名を入力してください');
      }
    } catch (Exception $e) {
      echo $e->getMessage();
      die;
    }
    $this->plan_name = $plan_name;
  }

  public function planName()
  {
    return $this->plan_name;
  }
}
