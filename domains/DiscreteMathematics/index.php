<?php 
$db = require_once "lib/db.php";

if($db != null)
{
  header("location: home.php");
}else{
  echo "<h1>ERROR!</h1>";
  echo "<p>DataBase is not connected</p>";
}