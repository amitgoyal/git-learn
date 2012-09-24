<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Validation</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body
    <?php
include 'lib.php';
include 'config.php';
include 'check.php';
echo ("value of form" . $_POST['form1']);
if (isset($_POST[form1])) {
  insertdata($_POST[uname], $_POST[uemail], $_POST[uaddress], $_POST[password]);
}
if (isset($_GET["page"])) {
  $page = $_GET["page"];
} else {
  $page = 1;
}
;
$start_from = ($page - 1) * 10;
$data       = selectall($start_from);
?>
     <div id="wrapper">
         <?php
echo $_GET[msg];
?>
       <h2><u>USER DETAILS</u></h2>
        <div>
            <input type="button" name="buttn" value="RANDOM" onclick="window.location = 'random.php';" />
            <input type="button" name="buttn" value="ADD USER" onclick="window.location = 'adduser.php';" />
                <input type="button" name="logout" value="LOGOUT" onclick="window.location = 'logout.php';" />
        <div class="sub_wrapper">
            <div class="header">
                <div class="heading">
                <h5><u>USER ID</u></h5>    
                </div>
                <div class="heading">
                <h5><u>NAME</u></h5>
                </div>    
                <div class="heading">
                <h5><u>EMAIL</u></h5>
                </div>    
                <div class="heading">
                <h5><u>ADDRESS</u></h5>
                </div>
                <div class="heading">
                <h5><u>ACTION</u></h5>    
                </div>
            </div>            
            <div class="header">                              
                <?php
foreach ($data as $value) {
?>
               <div class="heading">
                <h5> <?php
  echo $value[u_id];
?></h5>
                </div>
                <div class="heading">
                <h5>  <?php
  echo $value[u_ename];
?></h5>
                </div>    
                <div class="heading">
                <h5> <?php
  echo $value[u_email];
?> </h5>
                </div>    
                <div class="heading">
                <h5> <?php
  echo $value[u_address];
?></h5>
                </div>
                <div class="heading">
                   <a href="edit.php?uid=<?php
  echo $value['u_id'];
?>">Edit</a>|<a href="delete.php?uid=<?php
  echo $value['u_id'];
?>">Delete</a>
                </div>
                <?php
}
?>                
            </div>  
        </div>
      </div>
    <?php
$sql           = "SELECT COUNT(*) FROM firstdb";
$rs_result     = mysql_query($sql);
$row           = mysql_fetch_row($rs_result);
$total_records = $row[0];
$total_pages   = ceil($total_records / 10);
for ($i = 1; $i <= $total_pages; $i++) {
  echo "<a href='action.php?page=" . $i . "'>" . $i . "</a> ";
}
?> 
  </body>
</html>