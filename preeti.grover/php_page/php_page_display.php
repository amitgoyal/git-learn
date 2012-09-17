<?php
include 'php_page_check.php';
include 'php_page_config.php';
if (isset($_POST['u_add'])) { 
        insert($_POST['u_id'],$_POST['u_name'],$_POST['u_email'],$_POST['u_address']);
        }
if (isset($_GET["page"])) { 
    $page  = $_GET["page"];
    } 
    else { 
        $page=1;
        };
$start_from = ($page-1) * 20;
$data = selectall($start_from);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" version="XHTML+RDFa 1.0" dir="ltr">
    <head>
        <title>Display User Records</title>
        <link rel="stylesheet" type="text/css" href="php_page.css"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    </head>
    <body>
        <div id="logout" class="logout_form_operation">
          <input type="submit" name="logout_button" value="Log in" onclick="window.location = 'php_page_logout.php';"/>
          </div>
        <div id="wrapper">
            <div class="heading" id="id">ID</div>
            <div class="heading" id="name">Name</div>
            <div class="heading" id="email">Email</div>
            <div class="heading" id="address">Address</div>
            <div class="heading" id="action">
                <div class="action" id="edit">Edit</div>
                <div class="action" id="delete">Delete</div>
            </div>
            <?php foreach($data as $value){ ?>
            <div  class="row_data" id="row_id"><?php echo $value['ID']; ?></div>
            <div  class="row_data" id="row_name"><?php echo $value['Name']; ?></div>
            <div  class="row_data" id="row_email"><?php echo $value['Email']; ?></div>
            <div  class="row_data" id="row_address"><?php echo $value['Address']; ?></div>
            <div  class="row_data">
            <div class="row_action" id="edit"><a href="php_page_edit.php?uid=<?php echo $value['ID'];?>">Edit</a></div>
            <div class="row_action" id="delete"><a href="php_page_delete.php?uid=<?php echo $value['ID'];?>">Delete</a></div>
            </div>
            <?php }?>  
        </div>
     <?php
$sql = "SELECT COUNT(Name) FROM php_page_table";
$rs_result = mysql_query($sql);
$row = mysql_fetch_row($rs_result);
$total_records = $row[0];
$total_pages = ceil($total_records / 20);
for ($i=1; $i<=$total_pages; $i++) {
            echo "<a href='php_page_display.php?page=".$i."'>".$i."</a> ";
}
?>       
</body>    
</html>