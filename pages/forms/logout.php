 <?php
session_start(); 

unset($_SESSION['alogin']);

header("location:set.php"); 
?>