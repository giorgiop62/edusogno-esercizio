<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $user = "root";
 $pass = "";
 $db = "edusogno";
 $conn = new mysqli($dbhost, $user, $pass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>