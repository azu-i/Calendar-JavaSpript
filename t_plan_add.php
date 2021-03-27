<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>予定登録</title>
</head>

<body>
  <div class="base">
    <form action="plan_insert.php" method="post">
      <p>
        日程<br>
        <input type="date" name="date" value="<?php echo $insert_date ?>">
      </p>
      <p>
        時間<br>
        <input type="text" name="time" value="<?php echo $hour. ':00' ?>">
      </p>
      <p>
        予定名<br>
        <input type="text" name="plan-name">
      </p>
      <p>
        <input type="submit" name="submit" value="登録">
      </p>
    </form>
  </div>
</body>

</html>