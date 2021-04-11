<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/plan_add.css">
  <title>予定登録</title>
</head>

<body>
  <div class="base">
    <div class="container-text">
      <h2>予定登録</h2>
    </div>
    <div class="add-form">
      <form action="/controllers/plan_insert.php" method="post">
        <p>
          日程<br>
          <input type="date" name="date" value="<?= $insert_date ?>">
        </p>
        <p>
          時間<br>
          <input type="time" name="time" value="<?= $insert_hour ?>">
        </p>
        <p>
          予定名 ※20文字以内<br>
          <input type="text" name="plan-name" maxlength="20">
        </p>
        <p>
          <input type="submit" name="submit" value="登録">
        </p>
      </form>
    </div>
  </div>
  </div>
</body>
</html>