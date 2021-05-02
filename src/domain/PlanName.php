<?php
namespace app\domain;

class PlanName
{
  private $scheduleName;

  public function __construct($scheduleName)
  {
    try {
      if (strlen($scheduleName) > 20) {
        throw new Exception('予定名は20文字以下で入力してください');
      }
      if (empty($scheduleName)) {
        throw new Exception('予定名を入力してください');
      }
    } catch (Exception $e) {
      echo $e->getMessage();
      die;
    }
    $this->scheduleName = $scheduleName;
  }

  public function scheduleName()
  {
    return $this->scheduleName;
  }
}
