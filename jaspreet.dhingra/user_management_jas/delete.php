<?php
include 'lib.php';
delete($_GET[uid]);
echo (mysql_error());
header('location:action.php?msg=record deleted.');
?> 