<?php
session_start();
include('./Adminmodels/config.php');

if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}

?>