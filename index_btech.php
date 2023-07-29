<?php 
include('database_connection.php');//index.php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>FlyHigh:We choose best college for you</title>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery-ui.js"></script><!fees>

    <link href = "css/jquery-ui.css" rel = "stylesheet"><!fees er style>
    <link rel="stylesheet" href="styleimg.css"><!style-sdu state er nam tai baje dekhache..orano jabe>
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
                  $('.dropdown-submenu a.test').on("click", function(e){
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

    <!-- Page Content -->
    <div class="container-fluid">
        <div class="row">
        	<br>
            <div class="col-md-3">                				
				<div class="list-group"><br>
					<h3 class="text-light">Total Fees of the Course</h3>
					<input type="hidden" id="hidden_minimum_fees" value="1000" />
                    <input type="hidden" id="hidden_maximum_fees" value="1500000" />
                    <p class="text-light"id="fees_show">1000 - 1500000</p>
                    <div id="fees_range"></div>
                </div>
                <div class="list-group "><br>
					<h3 class="text-light">Stream</h3>
                    <div style="height:200px; overflow-y: auto; overflow-x: hidden;">
                    <div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Computer Science and Engineering"  >
 <?php echo "Computer Science and Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Civil Engineering"  >
 <?php echo "Civil Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Biotechnology"  >
 <?php echo "Biotechnology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Electronics & Communication Engineering"  >
 <?php echo "Electronics & Communication Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Electrical Engineering"  >
 <?php echo "Electrical Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Mechanical Engineering"  >
 <?php echo "Mechanical Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Biomedical Engineering"  >
 <?php echo "Biomedical Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Computer Engineering"  >
 <?php echo "Computer Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Petrochemical Engineering"  >
 <?php echo "Petrochemical Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Electronics Engineering"  >
 <?php echo "Electronics Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Chemical Engineering"  >
 <?php echo "Chemical Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Applied Chemistry"  >
 <?php echo "Applied Chemistry" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Aeronautical Engineering"  >
 <?php echo "Aeronautical Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Automobile Engineering"  >
 <?php echo "Automobile Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Industrial Heavy Machinery"  >
 <?php echo "Industrial Heavy Machinery" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Aerospace Engineering"  >
 <?php echo "Aerospace Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Bioinformatics"  >
 <?php echo "Bioinformatics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Biotechnology"  >
 <?php echo "Biotechnology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Civil Engineering"  >
 <?php echo "Civil Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Computer Science & Engineering"  >
 <?php echo "Computer Science & Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Electronics & Communications Engineering"  >
 <?php echo "Electronics & Communications Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Mechatronics"  >
 <?php echo "Mechatronics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Robotics"  >
 <?php echo "Robotics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Electronics & Instrumentation"  >
 <?php echo "Electronics & Instrumentation" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Electrical & Electronics Engineering"  >
 <?php echo "Electrical & Electronics Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Electronics & Telecommunication Engineering"  >
 <?php echo "Electronics & Telecommunication Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Food Technology"  >
 <?php echo "Food Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="IT"  >
 <?php echo "IT" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Nuclear Science & Engineering"  >
 <?php echo "Nuclear Science & Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Nanotechnology"  >
 <?php echo "Nanotechnology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Solar & Alternate Energy"  >
 <?php echo "Solar & Alternate Energy" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Avionics Engineering"  >
 <?php echo "Avionics Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Petroleum Engineering"  >
 <?php echo "Petroleum Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="AI"  >
 <?php echo "AI" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Computer Science And Systems Engineering"  >
 <?php echo "Computer Science And Systems Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Geo-Informatics Engineering"  >
 <?php echo "Geo-Informatics Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Instrumentation Engineering"  >
 <?php echo "Instrumentation Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Ceramic Technology"  >
 <?php echo "Ceramic Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Computer Science And Information Technology"  >
 <?php echo "Computer Science And Information Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Metallurgical Engineering"  >
 <?php echo "Metallurgical Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Instrumentation & Control Engineering"  >
 <?php echo "Instrumentation & Control Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Production Engineering"  >
 <?php echo "Production Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Software Engineering"  >
 <?php echo "Software Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Electrical And Electronics Engineering"  >
 <?php echo "Electrical And Electronics Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Mathematics And Computing"  >
 <?php echo "Mathematics And Computing" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Information Technology"  >
 <?php echo "Information Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Polymer Science & Chemical Technology"  >
 <?php echo "Polymer Science & Chemical Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Automotive Engineering"  >
 <?php echo "Automotive Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Engineering Physics"  >
 <?php echo "Engineering Physics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Environmental Engineering"  >
 <?php echo "Environmental Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Industrial & Production Engineering"  >
 <?php echo "Industrial & Production Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Artificial Intelligence"  >
 <?php echo "Artificial Intelligence" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Computer Science Engineering"  >
 <?php echo "Computer Science Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Data Science"  >
 <?php echo "Data Science" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Mechanical & Automation Engineering"  >
 <?php echo "Mechanical & Automation Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Computer Science And Engineering"  >
 <?php echo "Computer Science And Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Power Engineering"  >
 <?php echo "Power Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Tool Engineering"  >
 <?php echo "Tool Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Computer Science Engineering"  >
 <?php echo "Computer Science Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Aerospace Engineering"  >
 <?php echo "Aerospace Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Metallurgical And Materials Engineering"  >
 <?php echo "Metallurgical And Materials Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Mining Engineering"  >
 <?php echo "Mining Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Electrical Engineering [Power And Automation]"  >
 <?php echo "Electrical Engineering [Power And Automation]" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Biotechnology And Biochemical Engineering"  >
 <?php echo "Biotechnology And Biochemical Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Textile Engineering"  >
 <?php echo "Textile Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Material Science Engineering"  >
 <?php echo "Material Science Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Artificial Intelligence"  >
 <?php echo "Artificial Intelligence" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Engineering Science"  >
 <?php echo "Engineering Science" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Mathematics And Computing Mechanical Engineering"  >
 <?php echo "Mathematics And Computing Mechanical Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Civil Engineering"  >
 <?php echo "Civil Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Chemical Engineering"  >
 <?php echo "Chemical Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Physics"  >
 <?php echo "Physics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Metallurgical And Materials Engineering"  >
 <?php echo "Metallurgical And Materials Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Biomedical Engineering"  >
 <?php echo "Biomedical Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Pharmaceutical Technology"  >
 <?php echo "Pharmaceutical Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Ceramic Engineering"  >
 <?php echo "Ceramic Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Biological Sciences And Bio-Engineering"  >
 <?php echo "Biological Sciences And Bio-Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Agricultural And Food Engineering"  >
 <?php echo "Agricultural And Food Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Industrial Engineering"  >
 <?php echo "Industrial Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Naval Architecture & Ocean Engineering"  >
 <?php echo "Naval Architecture & Ocean Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Electronics and Electrical Communication Engineering"  >
 <?php echo "Electronics and Electrical Communication Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Manufacturing Engineering"  >
 <?php echo "Manufacturing Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Manufacturing Science and Engineering"  >
 <?php echo "Manufacturing Science and Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Engineering Physic"  >
 <?php echo "Engineering Physic" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Computer Science and Artificial Intelligence"  >
 <?php echo "Computer Science and Artificial Intelligence" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Computer Science and Applied Mathematics"  >
 <?php echo "Computer Science and Applied Mathematics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Computer Science and Biosciences"  >
 <?php echo "Computer Science and Biosciences" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Information Technology and Social Sciences"  >
 <?php echo "Information Technology and Social Sciences" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Computer Science and Design"  >
 <?php echo "Computer Science and Design" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Dyestuff Technology"  >
 <?php echo "Dyestuff Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Fibres and Textiles Processing Technology"  >
 <?php echo "Fibres and Textiles Processing Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Food Engineering and Technology"  >
 <?php echo "Food Engineering and Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Oils"  >
 <?php echo "Oils" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Oleochemicals and Surfactants Technology"  >
 <?php echo "Oleochemicals and Surfactants Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Pharmaceuticals Chemistry and Technology"  >
 <?php echo "Pharmaceuticals Chemistry and Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Polymer Engineering and Technology"  >
 <?php echo "Polymer Engineering and Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Surface Coating Technology"  >
 <?php echo "Surface Coating Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Food Technology & Biochemical Engineering"  >
 <?php echo "Food Technology & Biochemical Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Electronics And Instrumentation Engineering"  >
 <?php echo "Electronics And Instrumentation Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Computer Science and Technology"  >
 <?php echo "Computer Science and Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Computer Science and Engineering"  >
 <?php echo "Computer Science and Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Aeronautical Engineering"  >
 <?php echo "Aeronautical Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Electronics & Computer Engineering"  >
 <?php echo "Electronics & Computer Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Automobile Engineering"  >
 <?php echo "Automobile Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Computer Science & Engineering"  >
 <?php echo "Computer Science & Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Electronics And Communication Engineering"  >
 <?php echo "Electronics And Communication Engineering" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Petrochemical Technology"  >
 <?php echo "Petrochemical Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Petroleum Engineering and Technology"  >
 <?php echo "Petroleum Engineering and Technology" ?>
</label>
</div>



                    </div>
                </div>

                <div class="list-group"><br>
					<h3 class="text-light">State</h3>
                    <div style="height: 200px; overflow-y: auto; overflow-x: hidden;">
					<?php

                    $query = "SELECT DISTINCT state FROM btech WHERE college_status = '1' ORDER BY state DESC";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector state" value="<?php echo $row['state']; ?>"  > <?php echo $row['state']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                    </div>
                </div>

				<div class="list-group"><br>
					<h3 class="text-light">City</h3>
                    <div style="height: 200px; overflow-y: auto; overflow-x: hidden;">
                    <?php

                    $query = "SELECT DISTINCT city FROM btech WHERE college_status = '1'ORDER BY city DESC ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector city" value="<?php echo $row['city']; ?>" > <?php echo $row['city']; ?> </label>
                    </div>
                    <?php    
                    }

                    ?>
                </div>
                </div>
				
				<div class="list-group"><br>
					<h3 class="text-light">University</h3>
                    <div style="height: 200px; overflow-y: auto; overflow-x: hidden;">
					<?php
                    $query = " SELECT DISTINCT(university) FROM btech WHERE college_status = '1' ORDER BY university DESC";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector university" value="<?php echo $row['university']; ?>"  > <?php echo $row['university']; ?> </label>
                    </div>
                    <?php
                    }
                    ?>	
                </div>
                </div>
                <div class="list-group "><br>
					<h3 class="text-light">Exam</h3>
                    <div style="height:200px; overflow-y: auto; overflow-x: hidden;">
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector exam" value="WBJEE"  > <?php echo " WBJEE" ?></label>
                    </div>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector exam" value="AMUEEE"  > <?php echo " AMUEEE" ?></label>
                    </div>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector exam" value="Amity JEE"  > <?php echo " Amity JEE" ?></label>
                    </div>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector exam" value="AP EAMCET"  > <?php echo " AP EAMCET" ?></label>
                    </div>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector exam" value="MHT CET"  > <?php echo " MHT CET" ?></label>
                    </div>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector exam" value="JEE Main"  > <?php echo " JEE Main" ?></label>
                    </div>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector exam" value="JEE Advanced"  > <?php echo " JEE Advance" ?></label>
                    </div>
                    
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector exam" value="JNUET"  > <?php echo " JNUET" ?></label>
                    </div>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector exam" value="VITEEE"  > <?php echo " VITEEE" ?></label>
                    </div>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector exam" value="TNEA"  > <?php echo " TNEA" ?></label>
                    </div>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector exam" value="SRMJEE"  > <?php echo " SRMJEE" ?></label>
                    </div>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector exam" value="AP EAMCET"  > <?php echo "AP EAMCET" ?></label>
                    </div>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector exam" value="KLUEE"  > <?php echo " KLUEE" ?></label>
                    </div>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector exam" value="KUEE"  > <?php echo " KUEE" ?></label>
                    </div>
                </div>
                </div>

                <div class="list-group"><br>
					<h3 class="text-light">Type</h3>
                    <div style="height: 120px; overflow-y: auto; overflow-x: hidden;">
					<?php

                    $query = "SELECT DISTINCT type FROM btech WHERE college_status = '1' ORDER BY type DESC";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector type" value="<?php echo $row['type']; ?>"  > <?php echo $row['type']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                    </div>
                </div>

                <div class="list-group"><br>
					<h3 class="text-light">Hostel Accommodation</h3>
                    <div style="height: 50px; overflow-y: auto; overflow-x: hidden;">
					<?php

                    $query = "SELECT DISTINCT hostel FROM btech WHERE college_status = '1' ORDER BY type DESC";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector hostel" value="<?php echo $row['hostel']; ?>"  > <?php echo $row['hostel']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                    </div>
                </div>

                <div class="list-group"><br>
					<h3 class="text-light">Scholarship</h3>
                    <div style="height: 90px; overflow-y: auto; overflow-x: hidden;">
					<?php

                    $query = "SELECT DISTINCT scholarship FROM btech WHERE college_status = '1' ORDER BY scholarship DESC";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector scholarship" value="<?php echo $row['scholarship']; ?>"  > <?php echo $row['scholarship']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                    </div>
                </div>

                

            </div>

            <div class="col-md-9">
            	<br />
                <div class="row filter_data">

                </div>
            </div>
        </div>

    </div>
<style>

#loading
{
	text-align:center; 
	background: url('loader.gif') no-repeat center; 
	height: 150px;
}

a {
    color: #6f93e4b0;
    text-decoration: underline;
    font-size: 1.1rem;
}
b, strong {
    font-weight: 400;
}

.list-group-item {
    position: relative;
    display: block;
    padding: .5rem 1rem;
    color: #9586bb;
    text-decoration: none;
    background-color: #060c08d4;
    border: 1px solid rgba(0,0,0,.125);
}

.ui-widget-header {
    border: 1px solid #dddddd;
    background: #191616e6;
    color: #462b2b;
    font-weight: bold;
}
.h3, h3 {
  font-size: 1.2rem;
  font-weight: 300;
  color: rgb(10, 10, 14);
}
.h8, h8 {
  font-size: 1.0rem;
  font-weight: 300;
  color: rgb(1, 10, 14);
}
img {
  width: 100%;
  height: 150px;
}

body {
    background-image: url("imag7.jpg");
    background-repeat: no-repeat;
    background-size:1400px 6300px;
    
  }
</style>

<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_fees = $('#hidden_minimum_fees').val();
        var maximum_fees = $('#hidden_maximum_fees').val();
        var stream = get_filter('stream');
        var state = get_filter('state');
        var city = get_filter('city');
        var university = get_filter('university');
        var exam = get_filter('exam');
        var type = get_filter('type');
        var hostel = get_filter('hostel');
        var scholarship = get_filter('scholarship');
        

        $.ajax({
            url:"fetch_data_btech.php",
            method:"POST",
            data:{action:action, minimum_fees:minimum_fees, maximum_fees:maximum_fees, stream:stream, state:state, city:city, university:university,exam:exam, type:type, hostel:hostel, scholarship:scholarship },
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#fees_range').slider({
        range:true,
        min:1000,
        max:1500000,
        values:[1000, 1500000],
        step:500,
        stop:function(event, ui)
        {
            $('#fees_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_fees').val(ui.values[0]);
            $('#hidden_maximum_fees').val(ui.values[1]);
            filter_data();
        }
    });

});
</script>



</body>

</html>
