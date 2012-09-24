<?php
include 'lib.php';
include 'check.php';
$res1 = selectdata($_GET['uid']);
?>
<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>    
    <body>
     <div class="login">
      <form  method="POST">
    <br /><br />
    NAME: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="uname" value="<?php
echo $res1[0]['u_ename'];
?>" /><br/><br />
    E-MAIL: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="uemail" value="<?php
echo $res1[0]['u_email'];
?>" /><br/><br />
    ADDRESS: &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="uaddress" value="<?php
echo $res1[0]['u_address'];
?>" /><br/><br />
    PASSWORD: &nbsp;<input type="text" name="password" value="<?php
echo $res1[0]['password'];
?>" /><br/><br />
    <br /><input type="submit" name="frm" value="UPDATE" /> 
    <?php
if (isset($_POST[frm])) {
  update($_GET[uid], $_POST[uname], $_POST[uemail], $_POST[uaddress], $_POST[password]);
  header('location:action.php?msg=record updated.');
}
?>
     </form>
    </div>        
  </body>
</html> 