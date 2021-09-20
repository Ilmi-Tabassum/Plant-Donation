
<?php 
    include_once 'includes/userHeader.php'
?>


<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./css/contractstyle.css">
  
<section class ="my-5">
<div class="py-5">



<div class="container emp-profile">
<div class="col-sm-6 col-md-12 col-lg-12 col-12">
<aside class="col-sm-12">
	<p align = center ><img src="images/TK1.png" height = 100%,  width = 50% ></p>


  
<article class="card">
<div class="card-body p-5">


<ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
	<li class="nav-item">
		<a class="btn btn-info nav-info" data-toggle="pill" href="creditCard">
		<i class="fa fa-credit-card"></i> Credit Card</a></li>
	<li class="nav-item">
		<a class="btn btn-success nav-success" data-toggle="pill">
		<i class="fab fa-paypal nav-info"></i>  Paypal</a></li>
	<li class="nav-item">
		<a class="btn btn-info nav-info" data-toggle="pill" href="bkash">
		<img width = "50" height = "30" src="images/bkash.svg" alt="..." />    Bkash</a></li>
</ul>

<div class="tab-content">
<div class="tab-pane fade show active" id="nav-tab-card">



<div class="form-group">
<label for="cardNumber">Card number</label>
<div class="input-group">
	<div class="input-group-prepend">
	
	</div>
	<input type="text" class="form-control" name="paypalcardNo" placeholder="">
</div> 
</div> 

<div class="row">
    <div class="col-sm-8">
        <div class="form-group">
            <label><span class="hidden-xs" name= "paypalMonth" ></span> </label>
        	<div class="form-inline">
        		<select class="form-control" style="width:45%">
				  <option>MM</option>
				  <option>01 - January</option>
				  <option>02 - February</option>
				  <option>03 - March</option>
				  <option>04 - April</option>
				  <option>05 - May</option>
				  <option>06 - June</option>
				  <option>07 - July</option>
				  <option>08 - August</option>
				  <option>09 - September</option>
				  <option>10 - October</option>
				  <option>11 - November</option>
				  <option>12 - December</option>
				</select>
	            <span style="width:10%; text-align: center"> / </span>
	            <select class="form-control" name= "paypalYear" style="width:45%">
				  <option>YY</option>
				  <option>2021</option>
				  <option>2020</option>
				  <option>2019</option>
				  <option>2018</option>
				</select>
        	</div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
            <input class="form-control" required="" type="text">
        </div> 
    </div>
</div> 
<button class="subscribe btn btn-primary btn-block" type="button"> Confirm  </button>
</form>
</div> 
</article> 