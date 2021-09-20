<?php
session_start();
include('./Adminmodels/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{

if(isset($_POST['submit']))
{
$category=$_POST['category'];
$description=$_POST['description'];
$status=1;
$query=mysqli_query($con,"insert into tblcategory(CategoryName,Description,Is_Active) values('$category','$description','$status')");
if($query)
{
$msg="Category created ";
}
else{
$error="Something went wrong . Please try again.";    
} 
}
}

?>