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
 $val=$_REQUEST['u_search'];
$query_name="SELECT * FROM php_page_table WHERE Name LIKE '$val%'"; //query to retrieve records starting from a particular alphabet.
      $rs_result    = mysql_query($query_name);
      if (mysql_num_rows($rs_result) == 0) { ?>
        <?php header("Location:php_page_search_fail.php"); ?>
      <?php }
      while ($rs = mysql_fetch_array($rs_result)) {
          $search_result[] = $rs;
      }?>
     <div class="navigation" >
     <a href="php_page_form.php"/> Home <a/>
     </div> 
     <div class="logout">
     <a href="php_page_logout.php"/>Logout<a/>
     </div>
        <!--Display search results-->
     <div id="s_wrapper">
     <div class="heading" id="s_id">ID</div>
     <div class="heading" id="s_name">Name</div>
     <div class="heading" id="s_email">Email</div>
     <div class="heading" id="s_address">Address</div> 
     <div class="heading" id="s_action">
     <div class="action" id="s_edit">Edit</div>
     <div class="action" id="s_delete">Delete</div>
     </div>
<?php
foreach ($search_result as $value) {
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
    </body>
</html>