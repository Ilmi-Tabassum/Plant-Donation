<?php 
session_start();
include('./Adminmodels/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
if(isset($_POST['update']))
{

$imgfile=$_FILES["postimage"]["name"];

$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));

$allowed_extensions = array(".jpg","jpeg",".png",".gif", ".PNG", ".JPG", ".JPEG");

if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif / PNG / JPG / JPEG format allowed');</script>";
}
else
{

$imgnewfile=md5($imgfile).$extension;

move_uploaded_file($_FILES["postimage"]["tmp_name"],"postimages/".$imgnewfile);



$postid=intval($_GET['pid']);
$query=mysqli_query($con,"update tblposts set PostImage='$imgnewfile' where id='$postid'");
if($query)
{
$msg="Post Feature Image updated ";
}
else{
$error="Something went wrong . Please try again.";    
} 
}
}
}
?>