<?php

class Date
{
  private $date;

  public function __construct($date)
  {
    try {
      if (!strptime($date, '%Y-%m-%d')) {
        throw new Exception('日付はカレンダーから選択してください');
      }
      if (empty($date)) {
        throw new Exception('日付を入力してください');
      }
    } catch (Exception $e) {
      echo $e->getMessage();
      die;
    }
    $this->date = $date;
  }

  public function date(){
    return $this->date;
  }
}
