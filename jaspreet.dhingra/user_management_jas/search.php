<?php
include 'config.php';
include 'check.php';
$val          = $_REQUEST['search'];
$search_query = "SELECT * FROM firstdb WHERE u_ename LIKE '$val%'";
$rs_result    = mysql_query($search_query);
if (mysql_num_rows($rs_result) == 0) {
    echo ("NO RESULTS TO DISPALY!!");
}
while ($rs = mysql_fetch_array($rs_result)) {
    $display[] = $rs;
}
echo (mysql_error());
?>
<html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>SEARCH</title>
      <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
      <div id="wrapper">
       <h2><u>USER DETAILS</u></h2>
        <div>
          <input type="button" name="buttn" value="BACK" onclick="window.location = 'action.php';" />
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
foreach ($display as $value) {
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
  </body>
</html>