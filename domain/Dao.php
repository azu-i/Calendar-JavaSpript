<?php
ini_set('display_errors', "On");
class Dao
{
  const DSN = "mysql:host=localhost;dbname=calendar;charset=utf8";
  const USER = "root";
  const PASS = "root";

  private $pdo;

  public function __construct()
  {
    $this->pdo = new PDO(self::DSN, self::USER, self::PASS);
  }

  public function pdo()
  {
    return $this->pdo;
  }

  public function planInsert(Plan $plan)
  {
    $date = htmlspecialchars($plan->date(), ENT_QUOTES, 'UTF-8');
    $time = htmlspecialchars($plan->time(), ENT_QUOTES, 'UTF-8');
    $plan_name = htmlspecialchars($plan->planName(), ENT_QUOTES, 'UTF-8');;
    return $this->pdo->query("INSERT INTO `plan` (`date`, `time`, `plan_name`) VALUES('$date', '$time', '$plan_name')");
  }

  public function planDelete(int $id)
  {
    $id_delete = htmlspecialchars($id, ENT_QUOTES, 'UTF-8');
    return $this->pdo->query("DELETE FROM `plan` WHERE id=$id_delete"); 
  }

  public function findAll(): array
  {
    $st = $this->pdo()->query("SELECT * FROM plan");
    $plans = $st->fetchAll(PDO::FETCH_ASSOC);
    
    return $plans;
  }
}
