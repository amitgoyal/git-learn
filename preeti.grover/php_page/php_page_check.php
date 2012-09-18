<?php
session_start();
if ($_SESSION['logged_in']) {
  echo "<p>". "Welcome ".$_SESSION['session_name']."</p>";
   } else {
          header("Location:php_page_fail.php");
  }?>
  