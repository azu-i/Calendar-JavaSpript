<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/hour_choice.css">
  <script src="js/hour_choice.js " type="text/javascript"></script>
  <title>予定登録</title>
</head>

<body>
  <div class="container-text">
    <h2>予定登録 - 時間指定</h2>
  </div>
  <div class="button-container-plan">
    <h4><?php echo $selected_date ?></h4>
  </div>
  <table class="table-plan" id="plan">
    <tbody id="thead-hour"></tbody>
  </table>
  </div>
  <div class="link-calendar">
    <a href="calendar.html">カレンダーへ戻る</a>
  </div>
</body>

</html>