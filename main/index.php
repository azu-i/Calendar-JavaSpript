<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/calendar.css">
  <script src="/js/calendar.js" type="text/javascript"></script>
  <title>Calendar</title>
</head>

<body>
  <div class="container-calendar">
    <div class="footer-container-calendar">
      <label>日付指定：</label>
      <select id="select-box" class="js-year" onchange="jump()"></select>
      <select id="select-box" class="js-month" onchange="jump()">
        <option value=0>Jun</option>
        <option value=1>Feb</option>
        <option value=2>Mar</option>
        <option value=3>Apr</option>
        <option value=4>May</option>
        <option value=5>Jun</option>
        <option value=6>Jul</option>
        <option value=7>Aug</option>
        <option value=8>Sep</option>
        <option value=9>Oct</option>
        <option value=10>Nov</option>
        <option value=11>Dec</option>
      </select>
    </div>
    <div class="button-today">
      <button id="button" onclick="today()">today</button>
    </div>
    <h4 id="monthAndYear"></h4>
    <div class="button-container-calendar">
      <button id="click-button" onclick="previous()">previous</button>
      <button id="click-button" onclick="next()">next</button>
    </div>
    <table class="table-calendar" id="calendar">
      <thead id="thead-month"></thead>
      <tbody id="calendar-body"></tbody>
    </table>
  </div>
  <div class="link-plans">
    <a href="/allPlans">予定一覧</a>
  </div>
</body>

</html>