<?php
$q= $_GET['q'];
$flag=0;
$con=mysql_connect("localhost","root","");
mysql_select_db("ajax_demo_db");
if(!$con) {
  echo "cannot connect to database";
} 
    $sql="SELECT * FROM ajax_demo_table WHERE Username = '".$q."'";
    $result = mysql_query($sql);
            if(mysql_num_rows($result) == 0) {
               echo("Username available!");
                $flag=1;                
            }
            else {
                 echo("Sorry,Username already exits.");
                 return false;
            }
            if ($flag ==1) {
                insertdata($q);
            }
  function insertdata($q) {
  mysql_query("insert into ajax_demo_table(Username) values('$q')");
  echo ("\nUsername added to database");
  }
/*$result = mysql_query($sql);
while ($row = mysql_fetch_array($result))
  {
 if($row['Username'] == $q) {
echo("Sorry, Username not availabe");
return false;
    }
    }*/
?>