<?php
require_once('config.php');
session_start();
echo "HI your authenticated email is: " . $_SESSION['email'];
if (!isset($_SESSION['logged-in']) || $_SESSION['logged-in'] !== true) {
  header('Location: login.php');
  exit;
}
?> 