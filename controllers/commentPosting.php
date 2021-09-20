<?php 
session_start();
include('./includes/config.php');



//Genrating CSRF Token
if (empty($_SESSION['token1'])) {
 $_SESSION['token1'] = bin2hex(random_bytes(32));
}

if(isset($_POST['submit']))
{
  //Verifying CSRF Token
if (!empty($_POST['csrftoken'])) {
    if (hash_equals($_SESSION['token1'], $_POST['csrftoken'])) {


// $conn = mysqli_connect("localhost", "root", "");
// mysqli_select_db($conn,'registration-form');
$email = $_SESSION['usersEmail'];
$name = $_SESSION['usersName'];
// $name=$_POST['name'];
// $email=$_POST['email'];
$comment=$_POST['comment'];
$postid=intval($_GET['nid']);
$st1='1';
$query=mysqli_query($con,"insert into tblcomments(postId,name,email,comment,status) values('$postid','$name','$email','$comment','$st1')");
if($query):
//   echo "<script>alert('comment successfully submitted');</script>";
  unset($_SESSION['token1']);
else :
 echo "<script>alert('Something went wrong. Please try again.');</script>";  

endif;

}
}
}
?>