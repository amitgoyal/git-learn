<?php
  session_start();
  if ($_SESSION['logged_in']) {
?>
<div id="welcome">
     <?php
      echo "<p>" . "Welcome! " . $_SESSION['session_name'] . "</p>";
?>
</div>
     <?php
  } else {
      header("Location:php_page_fail.php"); //if login unsuccessful, redirect to login failed page.
  }
?> 