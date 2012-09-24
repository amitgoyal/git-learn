<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" version="XHTML+RDFa 1.0" dir="ltr">
    <head>
        <title>Logout Page</title>
        <link rel="stylesheet" type="text/css" href="php_page.css"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  </head>
    <body>
        <?php
  session_start();
  session_destroy();
?>
     <div id="logout_container">
      <h3 id="logout_heading">You are logged out!</h3>
      <a href ="php_page_login.php">Login</a>
      </div>
    </body>
</html>