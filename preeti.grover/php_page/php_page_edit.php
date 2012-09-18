<?php
include 'php_page_check.php';
include 'php_page_config.php';
 $res1=select_by_id($_GET['uid']);
 ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" version="XHTML+RDFa 1.0" dir="ltr">
    <head>
        <title>Edit User Records</title>
        <link rel="stylesheet" type="text/css" href="php_page.css"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  </head>
<body>
<form method="post" id="user_form">
    <fieldset>
    <legend>USER MANAGEMENT</legend>
       <div id="form_id" class="form_container">
       <label>ID:</label> <input type="text" name="u_id" class="form_element" value="<?php echo $res1[0][ID];?>"/>
       </div>
       <div id="form_name" class="form_container">
       <label>Name:</label> <input type="text" name="u_name" class="form_element" value="<?php echo $res1[0][Name];?>"/>
       </div>
       <div id="form_email" class="form_container">
       <label>Email:</label><input type="text" name="u_email" class="form_element" value="<?php echo $res1[0][Email];?>"/>
       </div>
        <div id="form_address" class="form_container">
        <label>Address</label><textarea name="u_address" class="form_element" ><?php echo $res1[0][Address];?></textarea>
        </div>
        <div id="update_user" class="operation">
        <input type="submit" name="u_update" value="Update Record"/>
        </div>
        <div id="reset" class="operation">
        <input type="reset" name="u_reset" value="Reset"/>
        </div>
    </fieldset>
 <?php if(isset($_POST['u_update']))
 {   
  update($_GET['uid'],$_POST['u_name'],$_POST['u_email'],$_POST['u_address']);
  header('location:php_page_display.php?msg=record updated.');
}
?>
    </form>
</body>
</html>