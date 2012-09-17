<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    
<body>    
<?php
include 'config.php';
include 'check.php';
?>
    <div class="login">
    <form action="action.php" name="form1" method="POST">   
        <legend><center><h3>NEW USER DETAILS</h3></center></legend><br /><br />
        &nbsp;<label>NAME</label>  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="uname" value="" /><br/><br />
        &nbsp;<label>EMAIL</label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="uemail" value="" /><br/><br />
        &nbsp;<label>ADDRESS</label>  &nbsp;&nbsp;&nbsp;<input type="text" name="uaddress" value="" /><br/><br />
        &nbsp;<label>PASSWORD</label>  <input type="password" name="password" value="" /><br/><br />
        <input type="submit" value="Add" name="form1" /><br /><br />
</form>
</div>    
</body>
</html> 
