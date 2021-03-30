<?php

class Time
{
  private $time;

  public function __construct($time)
  {
    try {
      if (!strptime($time, '%H:%i')) {
        throw new Exception('日付はカレンダーから選択してください');
      }
      if (empty($time)) {
        throw new Exception('時間を入力してください');
      }
    } catch (Exception $e) {
      echo $e->getMessage();
      die;
    }
    $this->time = $time;
  }

  public function time()
  {
    return $this->time;
  }
}
