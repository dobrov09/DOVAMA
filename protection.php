<?php
 $error_file="index.php?s=neprihlasen";
 
 session_start();
 header("Cache-control: private");
 if ($_SESSION["user_is_logged"] != 1){
  header("Location: ".$error_file);
  exit();
  }
?>