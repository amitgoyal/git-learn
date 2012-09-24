 <?php
  $host    = "localhost";
  $user    = "root";
  $pass    = "";
  $db_name = "ajax_demo_db";
  $con     = mysql_connect($host, $user, $pass);
  mysql_select_db($db_name);
  if (!$con) {
      echo "cannot connect to database";
  }
  $q     = $_GET["txt"];
  $sql   = mysql_query("SELECT * FROM ajax_demo_table" . $where);
  $where = " WHERE Username = " . $q;
  if (mysql_num_rows($myres) != 0) {
      echo ("<br/>" . "Record does not exist");
  } else {
      echo ("<br/>" . "Record exists");
      while ($res = mysql_fetch_array($sql)) {
          $myres[] = $res;
          echo ("<br/>" . "ID " . $myres[0]['ID']);
          echo ("<br/>" . "Age is " . $myres[0]['Age']);
          echo ("<br/>" . "Address is " . $myres[0]['Address']);
      }
  }
?> 