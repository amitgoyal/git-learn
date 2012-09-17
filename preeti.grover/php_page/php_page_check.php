<?php
session_start();
if ($_SESSION['logged_in']) {?>
   <?php echo $_SESSION['session_name'];?>
   <?php } else { 
                 header("Location:php_page_fail.php");
                }?>
  