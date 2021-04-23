<?php

class PlanName
{
  private $schedule_name;

  public function __construct($schedule_name)
  {
    try {
      if (strlen($schedule_name) > 20) {
        throw new Exception('予定名は20文字以下で入力してください');
      }
      if (empty($schedule_name)) {
        throw new Exception('予定名を入力してください');
      }
    } catch (Exception $e) {
      echo $e->getMessage();
      die;
    }
    $this->schedule_name = $schedule_name;
  }

  public function schedule_name()
  {
    return $this->schedule_name;
  }
}
