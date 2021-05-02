<?php
require_once(__DIR__ . '/../template/header.php');
session_start();
//選択してる日にちは'Y-m-d'型に
$selectedDate = $_SESSION['selectedDate'];
$date = new DateTime($selectedDate);
$insertDate = $date->format('Y-m-d');
//時間は'H:i'型にする
$selectedHour = $_GET['selectedHour'];
$hour = new Datetime($selectedHour . ":00");
$insertHour = $hour->format('H:i');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/planAdd.css">
  <title>予定登録</title>
</head>

<body>
  <div class="base">
    <div class="container-text">
      <h2>予定登録</h2>
    </div>
    <div class="add-form">
      <form action="/planInsert" method="get">
        <p>
          日程<br>
          <input type="date" name="date" value="<?= $insertDate ?>">
        </p>
        <p>
          時間<br>
          <input type="time" name="time" value="<?= $insertHour ?>">
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