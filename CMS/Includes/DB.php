<?php
$servername = "localhost";
$username = "root";
$password = "";
$options = array(
   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
);
try {
   $ConnectingDB = new PDO("mysql:host=$servername;dbname=cms", $username, $password,$options);
   // set the PDO error mode to exception
   $ConnectingDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //echo "Connected successfully";
   }
catch(PDOException $e)
   {
   echo "Connection failed: " . $e->getMessage();
   }
?>