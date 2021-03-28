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

  public function planInsert($date, $time, $plan_name)
  {
    return $this->pdo->query("INSERT INTO `plan`(`date`, `time`, `plan_name`) VALUES('$date', '$time', '$plan_name')");
  }

  public function findAll(): array
  {
    $st = $this->pdo()->query("SELECT * FROM plan");
    $plans = $st->fetchAll(PDO::FETCH_ASSOC);
    return $plans;
  }
}
