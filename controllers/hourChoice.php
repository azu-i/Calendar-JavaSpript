<?php
session_start();
$selected_date = $_GET['selected_date'];

$_SESSION['selected_date'] = $selected_date;
// require (__DIR__ . '/../views/hour_choice.
require_once (__DIR__ . '/../hourChoice/index.php');