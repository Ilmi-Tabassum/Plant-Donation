<?php
session_start();
include('./Adminmodels/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
if($_GET['action']=='del' && $_GET['rid'])
{
	$id=intval($_GET['rid']);
	$query=mysqli_query($con,"update tblcategory set Is_Active='0' where id='$id'");
	$msg="Category deleted ";
}

if($_GET['resid'])
{
	$id=intval($_GET['resid']);
	$query=mysqli_query($con,"update tblcategory set Is_Active='1' where id='$id'");
	$msg="Category restored successfully";
}


if($_GET['action']=='parmdel' && $_GET['rid'])
{
	$id=intval($_GET['rid']);
	$query=mysqli_query($con,"delete from  tblcategory  where id='$id'");
	$delmsg="Category deleted forever";
}
}
?>