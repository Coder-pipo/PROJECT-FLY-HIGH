<?php
include('database_connection.php');
?>

<html lang="en">
    <head>
        <title>contact Us</title>
        <link rel="stylesheet" href="contact_us.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -1px;
}
</style>
<meta charset="UTF-8">
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
                    <li><a tabindex="-1" href="index_bba.php" class="dropdown-item text-light">BBA</a></li>
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
     
      
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="img-3.jpg" class="d-block w-100" alt="...">
          <div class="centre"><p class="text-white" aria-setsize="20"><font size=5 style="Comic Sans MS">
            <marquee><font size="10">Mail us your queries at flyhigh2021@gmail.com</font></marquee>Now, for any kind of query, what to do!!<br>Reach us our team for any doubts, suggestions and information rearding the top colleges of India according to subjects that you choose.
            <br>We are here to provide yo the best colleges across all over India to persue courses with all other mathcing parameters you are in need for.<br>Wish you good luck for a bright future ahead!</font></p></div>
          <div class="carousel-caption d-none d-md-block">
            <h5 class="text-light">Finding Best College for you</h5>
            <p class="text-light">Connect us on the social media apps!!</p>
          </div>
        </div>
<!-- The social media icon bar -->
<div class="icon-bar">
  <a href="https://www.facebook.com/CollegeSearch/" class="facebook"><i class="fa fa-facebook"></i></a>
  <a href="https://twitter.com/home" class="twitter"><i class="fa fa-twitter"></i></a>
  <a href="#" class="google"><i class="fa fa-google"></i></a>
  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="https://www.youtube.com/results?search_query=best+colleges+in+india" class="youtube"><i class="fa fa-youtube"></i></a>
</div>
</body>
</html>