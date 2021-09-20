<?php
 session_start();

include('./Adminmodels/config.php');

if(isset($_POST['login']))
  {
 
 
     $uname=$_POST['username'];
    $password=$_POST['password'];
 
$sql =mysqli_query($con,"SELECT AdminUserName,AdminEmailId,AdminPassword FROM tbladmin WHERE (AdminUserName='$uname' || AdminEmailId='$uname')");
 $num=mysqli_fetch_array($sql);
if($num>0)
{
$hashpassword=$num['AdminPassword']; 

if (password_verify($password, $hashpassword)) {
$_SESSION['login']=$_POST['username'];
    echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
  } else {
echo "<script>alert('Wrong Password');</script>";
 
  }
}
else{
echo "<script>alert('User not registered with us');</script>";
  }
 
}
?>