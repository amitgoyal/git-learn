<?php
session_start();
$conn = mysql_connect("localhost", "root", "redhat");
if (!$conn) {
  die('Could not connect: ' . mysql_error());
}
$db = mysql_select_db("jaspreet", $conn);
if (!$db) {
  die('Unable to select db: ' . mysql_error());
}
?> 