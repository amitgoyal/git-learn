<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<?php
include 'php_page_check.php';
include 'php_page_config.php';
if ($auto_id==NULL) {
    $nxt_auto_id=1;
}
 $query=  mysql_query("Select * from php_page_table ORDER BY ID DESC LIMIT 1");
 while($row = mysql_fetch_array($query)){
 $auto_id=$row["ID"];
 $nxt_auto_id= $auto_id+1;
 }
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" version="XHTML+RDFa 1.0" dir="ltr">
    <head>
        <title>Welcome to User Management Page</title>
        <link rel="stylesheet" type="text/css" href="php_page.css"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
<body>
    <h1 id="form_heading">User Management</h1>
<form method="post" id="user_form" action="php_page_display.php">
    <fieldset>
    <legend>USER MANAGEMENT</legend>
    
       <div id="form_id" class="form_container">
            <label>ID:</label> <input type="text" name="u_id" class="form_element" value="<?php echo $nxt_auto_id;?>"/>
       </div>
    <div id="form_name" class="form_container">
            <label>Name:</label> <input type="text" name="u_name" class="form_element" value=""/>
    </div>
    <div id="form_email" class="form_container">
          <label>Email:</label><input type="text" name="u_email" class="form_element" value="" /> 
        </div>           
        <div id="form_address" class="form_container">
          <label>Address</label><textarea rows="10" cols="20" name="u_address" class="form_element" ></textarea> 
        </div>
    <div id="add_user" class="operation">
            <input type="submit" name="u_add" value="Add User Account"/>
    </div>
    <div id="display_user" class="operation">
            <input type="button" name="u_display" value="Display List of users"  onclick = "window.location = 'php_page_display.php';"/>
    </div>
    <div id="reset" class="operation">
            <input type="reset" name="u_reset" value="Reset"/>
    </div>
    </fieldset>
</form>
</body>
</html>