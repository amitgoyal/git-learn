<?php
include 'php_page_check.php';
include 'php_page_config.php';
delete($_GET['uid']);
header('location:php_page_display.php?msg=record deleted.');
?>