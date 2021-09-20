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
$catid=intval($_GET['cid']);
$category=$_POST['category'];
$description=$_POST['description'];
$query=mysqli_query($con,"Update  tblcategory set CategoryName='$category',Description='$description' where id='$catid'");
if($query)
{
$msg="Category Updated successfully ";
}
else{
$error="Something went wrong . Please try again.";    
} 
}

}
?>
