<?php 
session_start();
include('./includes/config.php');



//Genrating CSRF Token
if (empty($_SESSION['token2'])) {
 $_SESSION['token2'] = bin2hex(random_bytes(32));
}

if(isset($_POST['submit']))
{
  //Verifying CSRF Token
if (!empty($_POST['csrftoken'])) {
    if (hash_equals($_SESSION['token2'], $_POST['csrftoken'])) {


$email = $_SESSION['usersEmail'];
$name = $_SESSION['usersName'];

$amount=$_POST['amount'];
$postid=intval($_GET['nid']);
$st1='1';
$query=mysqli_query($con,"insert into tbldonation(postId,name,email,amount,status) values('$postid','$name','$email','$amount','$st1')");
if($query):
  echo "<script>alert('ammount successfully submitted');</script>";
  unset($_SESSION['token2']);
else :
 echo "<script>alert('Something went wrong. Please try again.');$comment</script>";  

endif;

}
}
}
?>