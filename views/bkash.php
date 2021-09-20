<?php include('./includes/userHeader.php');
   
?>

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./css/contractstyle.css">
  
<section class ="my-5">
<div class="py-5">



<div class="container emp-profile">
<div class="col-sm-6 col-md-12 col-lg-12 col-12">
  
	<p align = center ><img src="./images/TK1.png" height = 200%,  width = 50% ></p>
 <div class="container">
<ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
	<li class="nav-item">
		<a class="btn btn-info nav-info" data-toggle="pill" href="creditCard">
		<i class="fa fa-credit-card"></i> Credit Card</a></li>
	<li class="nav-item">
		<a class="btn btn-success nav-success" data-toggle="pill" href="paypal">
		<i class="fab fa-paypal nav-info"></i>  Paypal</a></li>
	<li class="nav-item">
		<a class="btn btn-info nav-info" data-toggle="pill" href="bkash">
		<img width = "50" height = "30" src="./images/bkash.svg" alt="..." />Bkash</a></li>
</ul>

<div class="tab-content">
<div class="tab-pane fade show active" id="nav-tab-card">

<form action="" method="POST" class="main-form">

<div class="two-col">
    <div class="col1">
    <div class="form-group">
        <label for=""></label>
        <input type="text" name="cardID" id="cardID" class="gt-input" placeholder = "Card Number">
      
      </div>
</div>
    <div class="form-group">
        <label for=""></label>

        <input type="text" name="expMonth" id="expMonth" class="gt-input" placeholder = "Expiry Month">
      </div>
</div>
      <input type="submit" class="gt-button" value="Submit">

     
      </div>
    </form>
  </div>

</div> 
</article> 