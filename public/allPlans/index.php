<?php
require_once (__DIR__ . '/../template/header.php');
require_once (__DIR__ . '/../../vendor/autoload.php');
use app\controllers\allPlans;
$allPlan = new allPlans();
$allPlans = $allPlan->allPlans();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/allPlans.css">
  <title>予定一覧</title>
</head>

<body>
  <div class="list-plans">
    <div class="row">
      <table class="table">
        <tr>
          <th>日程</th>
          <th>時間</th>
          <th>予定名</th>
          <th></th>
        </tr>
        <tbody>
          <?php foreach ($allPlans as $allPlan) { ?>
            <tr>
              <th><?= $allPlan['date']; ?></th>
              <th><?= $allPlan['time']; ?></th>
              <th><?= $allPlan['plan_name'];  ?></th>
              <th>
                <form action="/controllers/deletePlan.php" method="POST">
                  <input type="hidden" name="id" value="<?= $allPlan['id'] ?>">
                  <input type="submit" name="submit" value="削除">
                </form>
              </th>
            </tr>
          <?php }; ?>
        </tbody>
      </table>
    </div>

</body>

</html>