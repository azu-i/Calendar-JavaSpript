<?php

class Date
{
  private $day;

  public function __construct($day)
  {
    try {
      if (empty($day)) {
        throw new Exception('時間を入力してください');
      }
    } catch (Exception $e) {
      echo $e->getMessage();
      die;
    }
    $this->day = $day;
  }

  public function day(){
    return $this->day;
  }
}
