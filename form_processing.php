<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset= utf-8">
   
  </head>
  <body>

<pre>
<?php
//print_r($_POST);
$username = $_POST["username"];
$password = $_POST["password"];
//echo "Tere {$username}!" . "Teie parool on {$password}.";
//print_r($_POST);
?>
</pre>

<?php

  /*if (isset($_POST["username"])) {
    $username = $_POST["username"];

  } else {
    $username = "puudub";
  }*/
  $username = isset($_POST["username"]) ? $_POST["username"]) : "Puudub";

  /*if (isset($_POST["password"])) {
    $password = $_POST["password"];
     
  } else {
   
    $password = "puudub";
  }*/
  $password = isset($_POST["password"]) ? $_POST["password"]) : "Puudub";

  if ($username == "puudub" || $username == "" || $password == "puudub" ||  $password == "") {
//echo "Kasutajanimi või parool on puudu.";
  	echo "Kasutajanimi või parool on puudu.";
  } else {
echo "Tere {$username}!" . "Teie parool on {$password}.";
  }
?>
  </body>
</html>