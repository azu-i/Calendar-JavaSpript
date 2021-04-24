<?php
session_start();
$selectedDate = $_GET['selectedDate'];

$_SESSION['selectedDate'] = $selectedDate;
require_once (__DIR__ . '/../hourChoice/index.php');