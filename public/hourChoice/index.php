<?php
require_once(__DIR__ . '/../template/header.php');
session_start();
$selectedDate = $_GET['selectedDate'];

$_SESSION['selectedDate'] = $selectedDate;
require_once (__DIR__ . '/../hourChoice/index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/hourChoice.css">
  <script src="/js/hourChoice.js" type="text/javascript"></script>
  <title>予定登録</title>
</head>

<body>
  <div class="container-text">
    <h2>予定登録 - 時間指定</h2>
  </div>
  <div class="button-container">
    <h4><?= $selectedDate ?></h4>
    <p>予定を登録する時間を選んでください</p>
  </div>
  <table class="table-hour">
    <tbody id="thead-hour"></tbody>
  </table>
  </div>
</body>

</html>