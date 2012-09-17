<?php

require_once('config.php');

$error = '';

$form = $_POST['submit'];

$email = $_POST['email'];

$password = $_POST['password'];

if( isset($form) ) {

if( isset($email) && isset($password) && $email !== '' && $password !== '' ) {

   $sql = mysql_query("SELECT * FROM firstdb WHERE u_email='$email' and
   password='$password';");

   if( mysql_num_rows($sql) != 0 ) { //success
       $_SESSION['logged-in'] = true;
       $_SESSION['email'] = $email;
       $_SESSION['password'] = password;
       header('Location: enter.html');
       exit;
   } else { $error = "Incorrect login info"; }
   } else { $error = 'All information is not filled out correctly';}
 }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
 <body>
  <div >
      <div class="login">
          <form action="#" method="post" >
            <center><h1>LOGIN FORM</h1></center><br /><br />
            &nbsp;&nbsp;&nbsp;<label>Email</label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="email" type="text" value="<?php echo "$email";?>" /><br /><br />
            &nbsp;&nbsp;&nbsp;<label>Password</label>  &nbsp; <input name="password" type="password" /><br /><br /><br />
            <input name="submit" type="submit" value="LOG IN" class="sub"/>
         </form>
         <?php
          echo "<br /><span style=\"color:red\">$error</span>";
         ?>
      </div>
    </div>
</body>
</html>