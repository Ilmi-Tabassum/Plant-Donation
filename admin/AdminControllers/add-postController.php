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
$posttitle=$_POST['posttitle'];
$catid=$_POST['category'];
$postdetails=$_POST['postdescription'];
$arr = explode(" ",$posttitle);
$url=implode("-",$arr);
$imgfile=$_FILES["postimage"]["name"];

$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));

$allowed_extensions = array(".jpg","jpeg",".png",".gif", ".PNG",".JPG", ".JPEG");

if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif /PNG /JPG /JPEG format allowed');</script>";
}
else
{

$imgnewfile=md5($imgfile).$extension;

move_uploaded_file($_FILES["postimage"]["tmp_name"],"postimages/".$imgnewfile);

$status=1;
$query=mysqli_query($con,"insert into tblposts(PostTitle,CategoryId,PostDetails,PostUrl,Is_Active,PostImage) values('$posttitle','$catid','$postdetails','$url','$status','$imgnewfile')");
if($query)
{
$msg="Post successfully added ";
}
else{
$error="Something went wrong . Please try again.";    
} 
}
}
}
?>