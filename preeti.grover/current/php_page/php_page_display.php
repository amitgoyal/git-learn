<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" version="XHTML+RDFa 1.0" dir="ltr">
    <head>
        <title>Display User Records</title>
        <link rel="stylesheet" type="text/css" href="php_page.css"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    </head>
    <body>
<?php
  include 'php_page_check.php';
  include 'php_page_config.php';
  if (isset($_POST['u_add'])) {
      insert($_POST['u_id'], $_POST['u_name'], $_POST['u_email'], $_POST['u_address']); //call to insert record function.
  }
  if (isset($_GET["page"])) {
      $page = $_GET["page"];
  } else {
      $page = 1;
  }
  ;
  $start_from = ($page - 1) * 20; //calculate from where to start the records on each page.
  $data       = selectall($start_from); //call to select query to display all the records existing in database.
?>  
     <div class="navigation">
     <a href="php_page_form.php"/>Home<a/> <!--link to home page.-->
     </div>
     <div class="logout" >
     <a href="php_page_logout.php"/>Logout<a/><!--link to logout page.-->
     </div>
        <h1 id="display_heading">List of Users</h1>
     <div id="wrapper"><!-- layout to all display records existing in database.-->
     <div class="heading" id="id">ID</div>
     <div class="heading" id="name">Name</div>
     <div class="heading" id="email">Email</div>
     <div class="heading" id="address">Address</div>
     <div class="heading" id="action">
     <div class="action" id="edit">Edit</div>
     <div class="action" id="delete">Delete</div>
     </div>
    
     <?php
  foreach ($data as $value) {
?>
   <div class="row_id"><?php
      echo $value['ID'];
?></div>
     <div class="row_name"><?php
      echo $value['Name'];
?></div>
     <div class="row_email"><?php
      echo $value['Email'];
?></div>
     <div class="row_address"><?php
      echo $value['Address'];
?></div>
     <div>
     <div class="row_action" ><a href="php_page_edit.php?uid=<?php
      echo $value['ID'];
?>">Edit</a></div>
     <div class="row_action" ><a href="php_page_delete.php?uid=<?php
      echo $value['ID'];
?>">Delete</a></div>
    </div>
     <?php
  }
?>  
     </div>
     <?php
  $sql           = "SELECT COUNT(Name) FROM php_page_table"; //uery to count number of records in database.
  $rs_result     = mysql_query($sql);
  $row           = mysql_fetch_row($rs_result);
  $total_records = $row[0];
  $total_pages   = ceil($total_records / 20);
  for ($i = 1; $i <= $total_pages; $i++) {
      echo "<a href='php_page_display.php?page=" . $i . "'>" . $i . "</a> ";
  }
?>      
</body>    
</html>