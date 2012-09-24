<?php
$username    = $_POST['name'];
// The twitter API address
$url         = 'http://api.twitter.com/1/users/show.json?screen_name=' . $username;
//print($url);
$curl_handle = curl_init();
//print($curl_handle);
curl_setopt($curl_handle, CURLOPT_URL, "$url");
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle, CURLOPT_POST, false);
$buffer = curl_exec($curl_handle);
curl_close($curl_handle);
print('<pre>');
print($buffer);
echo ("</pre>");
?> 