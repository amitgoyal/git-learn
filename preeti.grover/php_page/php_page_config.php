<?php
$host = "localhost"; //database location
$user = "root"; //database username
$pass = ""; //database password
$db_name = "php_page_db"; //database name
$con = mysql_connect($host, $user, $pass);
mysql_select_db($db_name);
if (!$con) {
    die('Could not connect: ' );
}
function insert($u_id, $u_name, $u_email, $u_address)
{ 
  mysql_query("insert into php_page_table(ID,Name,Email,Address) values('$u_id','$u_name','$u_email', '$u_address')");
 }

function select_by_id ($u_id = NULL)
{ 
  if($u_id){
  $where = " WHERE ID = ".$u_id; 
  }
  $sql = mysql_query("SELECT * FROM php_page_table " .$where. " ORDER BY ID");
  while($res = mysql_fetch_array($sql)){
  $myres[] = $res;
  }
  return $myres;
}
function selectall($start_from) {
  $sqlselectall = "SELECT * FROM php_page_table ORDER BY ID ASC LIMIT $start_from, 20";
  $rs_result = mysql_query ($sqlselectall);
  while($rs = mysql_fetch_array($rs_result)){
        $display[] = $rs;
  }
  return $display;
  }
function update($u_id, $u_name, $u_email, $u_address)
{ 
  mysql_query("update php_page_table set ID='$u_id',Name='$u_name',Email='$u_email',Address='$u_address' where ID='$u_id'");
  echo("record updated");
}
function delete($u_id)
{
  mysql_query("delete from php_page_table where ID='$u_id'");
}
?>