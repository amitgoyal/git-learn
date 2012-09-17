<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" version="XHTML+RDFa 1.0" dir="ltr">
   <head>
     <title>Login Page</title>
     <link rel = "stylesheet" type = "text/css" href = "php_page.css"/>  
     <script type = "text/javascript" src = "php_page_validation.js"></script>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>    
   </head> 
   <body>
       <div id="login_heading_container">
       <h1 id="login_heading">User Login Page</h1>
       </div>
    <!--Opening an html form-->   
    <form  method = "post" name = "main_login_form" id="login_form"  action="php_page_authentication.php">
      <fieldset>
        <div id="username" class="login_form_container">
        <label>User Name:</label><input type="text" name="u_username" class="login_form_element"/> 
        </div> 
        <div id="pass" class="login_form_container">
          <label>Password:</label><input type="password" name="u_password" class= "login_form_element"/> 
        </div>
          <div id="sign_up" class="login_form_operation">
          <input type="submit" name="login_button" value="Log in"/>
          </div>
      </fieldset>
    </form> 
</body>
</html>