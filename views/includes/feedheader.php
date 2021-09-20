<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      
        <li class="nav-item">
        <h3 id="nav-link">
        Welcome, <?php if(isset($_SESSION['usersId'])){
        echo explode(" ", $_SESSION['usersName'])[0];
        }else
        {
        header("location: home.php");
        } 
        ?>
        </h3>
        </li>

        <?php
        $name =  $_SESSION['usersName'];
        ?> 

        <li class="nav-item">
        <a class="navbar-brand" href="index.php"><img src="images/logo.jpg" height="50" alt="AvatarS" class="img-circle user-img"> <href="home.php"> Save Plant Save Planet</a>
       </li>

      <div class="container">
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a class="nav-link" href="userProfile"><?php echo "$name" ?> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutUs">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactUs">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="creditCard">Donate</a>
            </li>
          
<li>
  <a class="nav-link" a href="../controllers/Users.php?q=logout">Logout</a>
</li>
  
  
          </ul>
        </div>
      </div>
    </nav>