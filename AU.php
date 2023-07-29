<?php
include('database_connection.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="AU.css">
    <meta charset="UTF-8">
  <title>Fly High-Home</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand text-light" href="#"><b>Fly High</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              <li class="nav-item">
                <a class="nav-link active text-light"  aria-current="page" href="front.php"><i class="fa fa-fw fa-home"></i> Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="AU.php">About Us</a></li>
                <li>
                <a class="nav-link active text-light" aria-current="page" href="contact_us.php"><i class="fa fa-fw fa-envelope"></i>Contact</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" aria-current="page" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Select Course
                </a>
                <ul class="dropdown-menu bg-dark text-white">
                      <li><a tabindex="-1" href="#" class="text-white">Science<span class="caret"></span></a></li>
                        <ul class="dropdown-submenu text-light">
                          <li><a tabindex="-1" href="index_bsc.php" class="dropdown-item text-light">B.Sc</a></li>
                          <li><a tabindex="-1" href="index_msc.php" class="dropdown-item text-light">M.Sc</a></li>
                          <li><a tabindex="-1" href="index_btech.php" class="dropdown-item text-light">B.Tech</a></li>
                          <li><a tabindex="-1" href="index_mtech.php" class="dropdown-item text-light">M.Tech</a></li>
                          <li><a tabindex="-1" href="index_bca.php" class="dropdown-item text-light">BCA</a></li>
                          <li><a tabindex="-1" href="index_mca.php" class="dropdown-item text-light">MCA</a></li></ul>
                          <li><hr class="dropdown-divider"></li>
                      <li><a tabindex="-1" href="#" class="text-white">Arts<span class="caret"></span></a></li>
                      <ul class="dropdown-submenu text-light">
                        <li><a tabindex="-1" href="index_ba.php" class="dropdown-item text-light">B.A</a></li>
                        <li><a tabindex="-1" href="index_ma.php" class="dropdown-item text-light">M.A</a></li></ul>
                        <li><hr class="dropdown-divider"></li>
                      <li><a tabindex="-1" href="#" class="text-white">Commerce<span class="caret"></span></a></li>
                      <ul class="dropdown-submenu text-light">
                        <li><a tabindex="-1" href="index_bcom.php" class="dropdown-item text-light">B.Com</a></li>
                        <li><a tabindex="-1" href="index_mcom.php" class="dropdown-item text-light">M.Com</a></li></ul>
                        <li><hr class="dropdown-divider"></li>
                      <li><a tabindex="-1" href="#" class="text-white">Management<span class="caret"></span></a></li>
                      <ul class="dropdown-submenu text-light">
                        <li><a tabindex="-5" href="index_bba.php" class="dropdown-item text-light">BBA</a></li>
                        <li><a tabindex="-1" href="index_mba.php" class="dropdown-item text-light">MBA</a></li></ul>
                </ul>
                </li>
              <script>
              $(document).ready(function(){
                $('.dropdown-menu a.test').on("click", function(e){
                  $(this).next('ul').toggle();
                  e.stopPropagation();
                  e.preventDefault();
                });
              });
              </script>
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="new_login.php">Feedback Corner</a></li>
                <li>
			  <li class="nav-item">
				<?php if(isset($_SESSION['USER_LOGIN'])){
					echo '<a class="nav-link active text-light" aria-current="page" href="logout.php">Logout</a></li>';
				}else{
					echo'<a class="nav-link active text-light" aria-current="page" href="sign_up.php">Login/Register</a></li>';
				}
				?>
               <li>
			   <li class="nav-item">
				<?php if(isset($_SESSION['USER_LOGIN'])){
					echo '<a class="nav-link active text-light" aria-current="page" href="wishlist.php">My Wishlist</a></li>';
				}else{
				}
				?>
               <li>
            </ul>
            
          <form class="d-flex" action="https://www.google.com/search" method="GET">
            <input class="form-control me-2" type="search" placeholder="Google Colleges" aria-label="Search" type="text" name="q">
            <button class="btn btn-outline-success" type="submit"><i class="fa fa-fw fa-search"></i></button>
            
            </form>
          </div>
        </div>
      </nav>
      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="img-1.jpg" class="d-block w-100" class=img-1 alt="...">
            <div class="centre"><p class="text-light" aria-setsize="20"><font size=7 style="Comic Sans MS"><b>So,WHO ARE WE?</font><br><font size=6>We are a team of students facing the real problem of finding the best suited college for your career and higher education.
                <br>So here we are to provide yo the best colleges across all over India to persue courses with all other mathcing parameters you are in need for.<br>Let's go to meet us!!</b></font></p></div>
            <div class="carousel-caption d-none d-md-block">
              <h5 class="text-light">Finding Best College for you</h5>
              <p class="text-light">We will find best choice of colleges for you according to your preference</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000" style="position: relative; left: 0; top: 0;">
            <img src="img-2.jpg" class="d-block w-100" alt="..." position= relative top=0 left= 0>
            <img src="doyel.jpg" class="doyel" height=40% width=20%>
            <div class="side"><h4 class="text-white"><b><font size=6>Doyel Swarnakar</h4></font>
              <br><p  class="text-white"><font size=5>Project Mastermind</font></b></p>
              <div class="social-links">
                  <img src="facebook.png" alt="">
                  <img src="instagram.png" alt="">
                  <img src="twitter.png" alt="">
                  <img src="linkedin.png" alt=""></div>
              </div>
              <div class="centre"><p class="text-light" aria-setsize="20"><font size=7 style="Comic Sans MS"><b>Meet our team</b></p></font></div>
              <img src="jagriti.jpg" class="pragna" height=40% width=20%>
              <div class="side1"><h4 class="text-white"><font size=6><b>Jagriti Sarkar</h4></font>
              <br><p  class="text-white"><font size=5>Project Mastermind</b></p></font>
              <div class="social-links">
                  <img src="facebook.png" alt="">
                  <img src="instagram.png" alt="">
                  <img src="twitter.png" alt="">
                  <img src="linkedin.png" alt=""></div>
              </div>

            <div class="carousel-caption d-none d-md-block">
              <h5 class="text-white">Providing all details</h5>
              <p class="text-white">We will provide all basic details of each college to choose you the best for you</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img-4.jpg" class="d-block w-100" alt="...">
            <img src="pragna.jpg" class="doyel" height=41% width=15.5%>
            <div class="pr"><h4 class="text-white"><font size=6><b>Pragna Biswas</h4></font>
                    <br><p  class="text-white"><font size=5>Project Mastermind</b></font></p>
                    <div class="social-links">
                        <img src="facebook.png" alt="">
                        <img src="instagram.png" alt="">
                        <img src="twitter.png" alt="">
                        <img src="linkedin.png" alt=""></div>
                    </div>
                    <div class="centre"><p class="text-light" aria-setsize="20"><font size=7 style="Comic Sans MS"><b>Meet our team</b></p></font></div>
                    <img src="sree.jpg" class="sree" height=44% width=15%>
                    <div class="sr"><h4 class="text-white"><font size=6><b>Sreeparna Roy</h4></font>
                    <br><p  class="text-white"><font size=5>Project Mastermind</b></p></font>
                    <div class="social-links">
                        <img src="facebook.png" alt="">
                        <img src="instagram.png" alt="">
                        <img src="twitter.png" alt="">
                        <img src="linkedin.png" alt=""></div>
                    </div>
            <div class="carousel-caption d-none d-md-block">
              <h5 class="text-white">No more searching here and there!</h5>
              <p class="text-white">All information, alltogether only for you.</p>
            </div>
          </div>
        </div>
        <script id="appyWidgetInit" src="https://chatbot.appypie.com/widget/loadbuild.js?cid=ko4ed559-AGENT1619792050512-BOTID1620028933512&name=mixBuild"></script>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  </body>
</html>