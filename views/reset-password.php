
<?php 
        include_once './includes/header.php';
    include_once '../helpers/session_helper.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./css/style.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
<div class="col-sm-6 col-md-12 col-lg-12 col-12">
<div class="bg-img">
<div class="content">
    <h1 class="header">Reset Password</h1>

    <?php flash('reset') ?>

    <form method="post" action="../controllers/ResetPasswords.php">
    <br>
    <div class="field space">
    <span class="fas fa-envelope-open-text"></span>
        <input type="hidden" name="type" value="send" />
        <input type="text" name="usersEmail" 
        placeholder="Email">
</div>
        <br>
        <button id="hello"><h5><a type="submit" name="submit">Receive Email </h5></button></a>
    </form>
    
