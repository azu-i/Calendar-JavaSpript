<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/addPlan.css" >
  <script src="js/calendar.js " type="text/javascript"></script>
  <title>予定追加</title>
</head>
<body>
  <div class="container-text">
    <h3>予定を登録</h3>
  </div>
  <div class="button-container-plan">
    <button class="previous-day" onclick="previous()">previous day</button>
    <h4 id="dayAndmonthAndYear"></h4>
    <button class="next-day" onclick="next()">next day</button>
  </div>
  <table class="table-plan" id="calendar">
    <thead id="thead-time"></thead>
    <tbody id="plan-body"></tbody>
  </table>
  </div>
</body>
</html>