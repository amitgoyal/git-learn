<?php
include 'lib.php';
insertrandom();
echo(mysql_error());
header('location:action.php?msg=random record entered.');
?>