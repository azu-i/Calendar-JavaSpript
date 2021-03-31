<?php

class Time
{
  private $hour;

  public function __construct($hour)
  {
    try {
      if (empty($hour)) {
        throw new Exception('時間を入力してください');
      }
    } catch (Exception $e) {
      echo $e->getMessage();
      die;
    }
    $this->hour = $hour;
  }

  public function hour()
  {
    return $this->hour;
  }
}
