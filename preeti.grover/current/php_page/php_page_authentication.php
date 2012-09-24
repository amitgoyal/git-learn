 <?php
  include 'php_page_config.php';
  session_start();
  $username  = $_POST['u_username'];
  $password  = $_POST['u_password'];
  $sql_query = "SELECT * FROM php_page_table WHERE Username = '$username' AND Password = '$password'"; //query to find if username and password exists in the database.
  $sql_login = mysql_query($sql_query);
  $get_row   = mysql_fetch_array($sql_login);
  if (mysql_num_rows($sql_login) != 0) {
      $_SESSION['logged_in']    = true;
      $_SESSION['session_id']   = $get_row['ID'];
      $_SESSION['session_name'] = $get_row['Name'];
      header("Location:php_page_form.php"); //if login successful, redirect to home page.
  } else {
      header("Location:php_page_fail.php"); //if login unsuccessful, redirect to login failed page.
  } 