<?php 
session_start();
if(!IsSet($_SESSION['logged'])){
header('location:login.php'); 
}
?>