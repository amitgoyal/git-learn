<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" version="XHTML+RDFa 1.0" dir="ltr">
    <head>
        <title>Displaying Friend List</title>
        <link rel="stylesheet" type="text/css" href="fb_curl_stylesheet.css"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
    <body>
<?php
  if (isset($_POST) && !empty($_POST)) {
      $name  = $_POST['username'];
      if ($name != 'grover.preeti') {
       header('location:fb_curl_fail.php');   
      }
      $posts = loadFb($name);
      print_r("username is " . $name);
  }
  function curl_get_contents($url)
  {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_HEADER, 0);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $output = curl_exec($ch);
      curl_close($ch);
      return $output;
  }
  ;
  function loadFB($fbID)
  {
      $limit       = 100;
      $accesstoken = 'AAABfLeDM304BAFmufCbLamtN8ZC1PZCZBdX1bFI0h7nicR1G0RCVYYQtJlBjyaFj9lG8QZCJrpZA7Ykthf8iRKJsXu28ZAA4l1l5qvSB087wZDZD';
      $url         = "https://graph.facebook.com/" . $fbID . "/friends?access_token=" . $accesstoken . "&limit=" . $limit;
      $posts       = curl_get_contents($url);
      return (json_decode($posts));
  }
?>
  <div class="heading_container">
   <h1 class="heading">My Friend List</h1>
   </div>
   <div class="wrapper">
  <?php
  $count = 1;
?>
<?php
  foreach ($posts->data as $data) {
?>
 
<?php
      if ($data->name != '') {
?>
  <div class="friends">
   <?php
          echo $count . ". ";
?>
  <?php
          echo $data->name;
?>
     <?php
          $count = $count + 1;
?>
  </div>    
         <?php
      }
?>
 <?php
  }
?>
 </div>
 </body>
</html>