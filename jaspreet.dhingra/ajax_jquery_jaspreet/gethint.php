<?php
$host    = "localhost";
$user    = "root";
$pass    = "redhat";
$db_name = "jaspreet";
$con     = mysql_connect($host, $user, $pass);
mysql_select_db($db_name);
if (!$con) {
  echo "cannot connect to database";
  return false;
}
$u_id = $_GET["txt"];
$res  = mysql_query("SELECT * FROM table1 WHERE uname = '" . $u_id . "'");
if (mysql_num_rows($res) == 0) {
  echo "You can take this username and it will be saved for future use!";
  mysql_query("insert into table1(uname) values('$u_id')");
  } else {
  echo "Sorry this username is already taken";
}
?>