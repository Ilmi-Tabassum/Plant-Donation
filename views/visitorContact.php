
<?php 
   include_once './includes/visitorheader.php';
    include_once '../controllers/contactController.php'
?>



<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./css/contractstyle.css">
  
<section class ="my-5">
<div class="py-5">



<div class="container emp-profile">
<div class="col-sm-6 col-md-12 col-lg-12 col-12">


  <div class="container">
    <h1>Contact Us Here</h1>

    <form action="" method="POST" class="main-form">
      <div class="form-group">
        <label for=""></label>
        <input type="text" name="name" id="name" class="gt-input" placeholder = "Name"
          value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $name ?>">
      </div>

      <div class="form-group">
        <label for=""></label>
        <input type="text" name="email" id="email" class="gt-input" placeholder = "Email"
          value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $email ?>">
      </div>

      <div class="form-group">
        <label for=""></label>
        <textarea name="message" id="message" cols="30" rows="10" placeholder = "Your Message"
          class="gt-input gt-text"><?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $message ?></textarea>
      </div>

      <input type="submit" class="gt-button" value="Submit">

      <div class="form-status">
        <?php echo $status ?>
      </div>
    </form>
  </div>

  <script src="main.js"></script>

</body>

</html>