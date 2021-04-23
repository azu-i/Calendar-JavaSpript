<?php
require_once (__DIR__ . '/../controllers/all_plans.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/all_plans.css">
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
          <?php foreach ($all_plans as $all_plan) { ?>
            <tr>
              <th><?= $all_plan['date']; ?></th>
              <th><?= $all_plan['time']; ?></th>
              <th><?= $all_plan['plan_name'];  ?></th>
              <th>
                <form action="/controllers/delete_plan.php" method="POST">
                  <input type="hidden" name="id" value="<?= $all_plan['id'] ?>">
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