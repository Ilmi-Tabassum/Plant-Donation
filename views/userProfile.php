<?php 
    include_once 'includes/userHeader.php'
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Account | Save Plants</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/contractstyle.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </head>
  <body>




<section class ="my-5">
  <div class="py-5">




<?php
$id =  $_SESSION['usersUid'];
?> 

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="call-sm-12 col-md-4 col-lg-4 col-12">
                        <div class="profile-img">
<div>
  

</div>

</div>


                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                  <section class = " about my-5">
                      <div class = " container text">   
                      <h4><?php echo "@$id" ?> </h4>

      <br>
    
   
          <ul class="nav nav-tabs" id="myTab" role="tablist">

                                <li class="nav-item">
                                    <a class="btn btn-primary nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">My Profile</a>
                                </li>
         </ul>


            <div class="col-md-12">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            
  <br>
  
    
  <thread>
  <th>Username : </th> <br>
  <th>Email :   </th> <br>
  <th>Country :   </th> <br>
  <th>Gender :   </th> <br>
  <th>Country  :   </th> <br>
  </thread>


<tr>
<div class="col-md-6">
<td> <?php echo $_SESSION['usersName']; ?> </td> <br>
<td><?php echo  $_SESSION['usersEmail']; ?> </td> <br>
<td><?php echo  $_SESSION['usersCountry']; ?> </td> <br>
<td><?php echo  $_SESSION['usersGender']; ?> </td> <br>
<td><?php echo  $_SESSION['usersCountry']; ?> </td> <br>
</tr>


