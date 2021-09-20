<?php 
    include_once './includes/header.php'
?>

    <section class="home">
      <video class="video-slide active" src="1.mp4" autoplay muted loop></video>
      <video class="video-slide" src="2.mp4" autoplay muted loop></video>
      <video class="video-slide" src="3.mp4" autoplay muted loop></video>
      <video class="video-slide" src="4.mp4" autoplay muted loop></video>
      <video class="video-slide" src="5.mp4" autoplay muted loop></video>
      <div class="content active">
        <h1>We Can</h1>
         
        <h2><span> Save Plant Save Planet!</span></h2>
        <br>
        <p>Save Plant Save Planet is a non-profit environmental charity on a mission of global reforestation. Together with our tree planting partners, we plant trees in many regions across all over Bangladesh Our branches are in all divisions Barishal 🌲, Chattogram 🌲, Dhaka 🌲, Khulna 🌲, Rajshahi 🌲, Rangpur 🌲, Mymensingh 🌲 and Sylhet 🌲 .</p>
        <a href="login.php">Read More</a>
      </div>
      <div class="content">
        <h1>Donate Money<br><span>Save Nature!</span></h1>
        <p>Forest areas in Bangladesh are decreasing at an alarming rate. To maintain the environmental balance of any country at least 25? forests of the total area is a must. According to the Bangladesh government, now the forest area in Bangladesh is only 17.08! But it is only 10? according to UNESCO and according to FAO it is about 9!</p>
        <a href="login.php">Read More</a>
      </div>
      <div class="content">
        <h1>View Plant Feed<br><span></span></h1>
        <p>News feeds are user friendly and easy way to keep updated on the different Plantation news that's of interest to you. Instead of having to go to diiferent pages to see if there's a new story or feature, a news feed will deliver the headlines straight to your desktop, every time the news you want is updated!</p>
        <a href="login">Read More</a>
      </div>
      <div class="content">
        <h1>We can</h1>
        <h2><span>Bring Change Together</span></h2>
        <br>
        <p>You can make a difference with your support! Not only will newly planted trees help re-establish a healthy forest: the species planted will also be resilient in the face of rising temperatures due to climate change. This project will create habitat for iconic wildlife species like the grizzly bear, sandhill crane, and moose. Thank you so much for your support of healthy forests! 🌲</p>
        <a href="login">Read More</a>
      </div>
      <div class="content">
        <h1>Feel Nature!<br><span>Relax</span></h1>
        <p></p>
        <a href="login">Read More</a>
      </div>
      <div class="media-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
      </div>
      <div class="slider-navigation">
        <div class="nav-btn active"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
      </div>
    </section>

    <script type="text/javascript">

    const menuBtn = document.querySelector(".menu-btn");
    const navigation = document.querySelector(".navigation");

    menuBtn.addEventListener("click", () => {
      menuBtn.classList.toggle("active");
      navigation.classList.toggle("active");
    });

    const btns = document.querySelectorAll(".nav-btn");
    const slides = document.querySelectorAll(".video-slide");
    const contents = document.querySelectorAll(".content");

    var sliderNav = function(manual){
      btns.forEach((btn) => {
        btn.classList.remove("active");
      });

      slides.forEach((slide) => {
        slide.classList.remove("active");
      });

      contents.forEach((content) => {
        content.classList.remove("active");
      });

      btns[manual].classList.add("active");
      slides[manual].classList.add("active");
      contents[manual].classList.add("active");
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        sliderNav(i);
      });
    });
    </script>

  </body>
</html>
