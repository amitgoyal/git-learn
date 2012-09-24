<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" version="XHTML+RDFa 1.0" dir="ltr">
   <head>
     <title>Login Page</title>
     <link rel = "stylesheet" type = "text/css" href = "fb_curl_stylesheet.css"/> 
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>    
   </head> 
   <body>
       <div class="heading_container">
       <h1 class="heading">Integrating Facebook</h1>
       </div>
    <!--Opening an html form-->  
    <form  method = "post" name = "main_login_form" id="form"  action="fb_curl_retrieve.php">
      <fieldset>
        <div id="username" class="form_container">
        <label>User Name:</label><input type="text" name="username" class="login_form_element" value=""/> 
        </div> 
        <div id="sign_up" class="form_operation">
        <input type="submit" name="send_button" value="Retrieve Data"/>
        </div>
      </fieldset>
    </form>
</body>
 </html>