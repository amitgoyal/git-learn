<?php
include 'config.php';

function insertdata($uname,$uemail,$uaddress,$password) {
  echo ("entered");
  mysql_query("insert into firstdb(u_ename,u_email,u_address,password) values('$uname','$uemail','$uaddress','$password')");
  echo(mysql_error());
}

function update($uid,$uname,$uemail,$uaddress,$password) {
  mysql_query("update firstdb set u_ename='$uname',u_email='$uemail',u_address='$uaddress' ,password='$password' where u_id='$uid'");
}
function delete($uid) {
  mysql_query("delete from firstdb where u_id='$uid'");
}
function select($uid) {
  mysql_query("select u_ename,u_email,u_phone,password from firstdb where u_id='$uid'");    
}
function insertrandom() {
  $uname="junk";
  $uemail="junk";
  $uaddress="junk";
  $password="junk";
   for($i=0;$i<1000;$i++) {
        mysql_query("insert into firstdb(u_ename,u_email,u_address,password) values('$uname','$uemail','$uaddress','$password')");   
    }
}
function selectdata($uid = NULL)
{
    if($uid){
       $where =" WHERE u_id = ".$uid; 
    }
    $sql = mysql_query("SELECT * FROM firstdb ".$where);
    while($res = mysql_fetch_array($sql)){
        $myres[] = $res;
    }
    return $myres;
}
function selectall($start_from) {
 $sqlselectall = "SELECT * FROM firstdb LIMIT $start_from, 10";
 $rs_result = mysql_query ($sqlselectall);
 while($rs = mysql_fetch_array($rs_result)){
        $display[] = $rs;
 }
return $display;
}
?>