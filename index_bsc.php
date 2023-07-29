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
	<link rel="stylesheet" href="front.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
    <title>FlyHigh:We choose best college for you</title>

    <script src="js/jquery-3.6.0.min.js"></script><!may be jquery download file-compressed version>
    <script src="js/jquery-ui.js"></script><!fees>

    <link href = "css/jquery-ui.css" rel = "stylesheet"><!fees>
    <link rel="stylesheet" href="styleimg.css"><!style>
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
<label><input type="checkbox" class="common_selector stream" value="Mathematics"  >
 <?php echo "Mathematics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Zoology"  >
 <?php echo "Zoology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Computer Application"  >
 <?php echo "Computer Application" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Physics"  >
 <?php echo "Physics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Chemistry"  >
 <?php echo "Chemistry" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Biochemistry"  >
 <?php echo "Biochemistry" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Botany"  >
 <?php echo "Botany" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Geology"  >
 <?php echo "Geology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Statistics"  >
 <?php echo "Statistics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Home Science"  >
 <?php echo "Home Science" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Geography"  >
 <?php echo "Geography" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Industrial Chemistry"  >
 <?php echo "Industrial Chemistry" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Agriculture"  >
 <?php echo "Agriculture" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Mathematics"  >
 <?php echo "Mathematics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Biology"  >
 <?php echo "Biology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Psychology"  >
 <?php echo "Psychology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Computer Science"  >
 <?php echo "Computer Science" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Economics"  >
 <?php echo "Economics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Computer Science"  >
 <?php echo "Computer Science" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Actuarial Science"  >
 <?php echo "Actuarial Science" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Biotechnology"  >
 <?php echo "Biotechnology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Nutrition & Dietetics"  >
 <?php echo "Nutrition & Dietetics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Environmental Science"  >
 <?php echo "Environmental Science" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Medical Radiography & Imaging Technology"  >
 <?php echo "Medical Radiography & Imaging Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Physician Assistant"  >
 <?php echo "Physician Assistant" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Nursing"  >
 <?php echo "Nursing" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Medical Laboratory Technology"  >
 <?php echo "Medical Laboratory Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Operation Theatre Technology"  >
 <?php echo "Operation Theatre Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Critical Care Technology"  >
 <?php echo "Critical Care Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Artificial Intelligence"  >
 <?php echo "Artificial Intelligence" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Plant Science"  >
 <?php echo "Plant Science" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Medical Microbiology"  >
 <?php echo "Medical Microbiology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Food Technology"  >
 <?php echo "Food Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Catering Science And Hotel Management"  >
 <?php echo "Catering Science And Hotel Management" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Costume Design And Fashion"  >
 <?php echo "Costume Design And Fashion" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Medical Laboratory Technology"  >
 <?php echo "Medical Laboratory Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Genetics"  >
 <?php echo "Genetics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Psychology"  >
 <?php echo "Psychology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Information Technology"  >
 <?php echo "Information Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Microbiology"  >
 <?php echo "Microbiology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Biophysics"  >
 <?php echo "Biophysics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Instrumentation"  >
 <?php echo "Instrumentation" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Applied Physics"  >
 <?php echo "Applied Physics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Environmental Science & Water Management"  >
 <?php echo "Environmental Science & Water Management" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Medical Biochemistry"  >
 <?php echo "Medical Biochemistry" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Applied Statistics"  >
 <?php echo "Applied Statistics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Electronics"  >
 <?php echo "Electronics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Aquaculture"  >
 <?php echo "Aquaculture" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Family And Community Science"  >
 <?php echo "Family And Community Science" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Hotel Management And Culinary Arts"  >
 <?php echo "Hotel Management And Culinary Arts" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Polymer Chemistry"  >
 <?php echo "Polymer Chemistry" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Multimedia & Web Technology"  >
 <?php echo "Multimedia & Web Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Optoelectronics"  >
 <?php echo "Optoelectronics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Printing Technology"  >
 <?php echo "Printing Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Biotechnology"  >
 <?php echo "Biotechnology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Hospitality And Hotel Management"  >
 <?php echo "Hospitality And Hotel Management" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Medical"  >
 <?php echo "Medical" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Animation"  >
 <?php echo "Animation" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="VFX and Gaming"  >
 <?php echo "VFX and Gaming" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Non-Medical"  >
 <?php echo "Non-Medical" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Airline and Airport Management"  >
 <?php echo "Airline and Airport Management" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Interior Design"  >
 <?php echo "Interior Design" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Fashion Design"  >
 <?php echo "Fashion Design" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Tourism & Travel Management"  >
 <?php echo "Tourism & Travel Management" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Culinary Arts"  >
 <?php echo "Culinary Arts" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Resort and Event Management"  >
 <?php echo "Resort and Event Management" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Restaurant and Catering Management"  >
 <?php echo "Restaurant and Catering Management" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Maths"  >
 <?php echo "Maths" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Statistics and Computer Science"  >
 <?php echo "Statistics and Computer Science" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Visual Communication"  >
 <?php echo "Visual Communication" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Clinical Nutrition And Dietetics"  >
 <?php echo "Clinical Nutrition And Dietetics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Advanced Zoology & Biotechnology"  >
 <?php echo "Advanced Zoology & Biotechnology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Food Service Management and Dietetics"  >
 <?php echo "Food Service Management and Dietetics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Nutrition"  >
 <?php echo "Nutrition" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Mathematics with Computer Applications"  >
 <?php echo "Mathematics with Computer Applications" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Plant Biology And Plant Biotechnology"  >
 <?php echo "Plant Biology And Plant Biotechnology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Microbiology"  >
 <?php echo "Microbiology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Anthropology"  >
 <?php echo "Anthropology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Botany"  >
 <?php echo "Botany" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Forensic Sciences"  >
 <?php echo "Forensic Sciences" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Cancer Biology"  >
 <?php echo "Cancer Biology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Renewable Energy"  >
 <?php echo "Renewable Energy" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Hospital Administration"  >
 <?php echo "Hospital Administration" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Cardiac Technology"  >
 <?php echo "Cardiac Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Nuclear Medicine Technology"  >
 <?php echo "Nuclear Medicine Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Renal Dialysis Technology"  >
 <?php echo "Renal Dialysis Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Digital Filmmaking"  >
 <?php echo "Digital Filmmaking" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Gaming"  >
 <?php echo "Gaming" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Graphics"  >
 <?php echo "Graphics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Dialysis"  >
 <?php echo "Dialysis" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Operation Theatre Technology"  >
 <?php echo "Operation Theatre Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Critical Care Technology"  >
 <?php echo "Critical Care Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Anaesthesia Technology"  >
 <?php echo "Anaesthesia Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Radiation Technology"  >
 <?php echo "Radiation Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Medical Record Technology"  >
 <?php echo "Medical Record Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Virology & Immunology"  >
 <?php echo "Virology & Immunology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Medical"  >
 <?php echo "Medical" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Chemistry"  >
 <?php echo "Chemistry" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Physics"  >
 <?php echo "Physics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Zoology"  >
 <?php echo "Zoology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Statistics"  >
 <?php echo "Statistics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Botany"  >
 <?php echo "Botany" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Sociology"  >
 <?php echo "Sociology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Visual Communication"  >
 <?php echo "Visual Communication" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Physical Education"  >
 <?php echo "Physical Education" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Health Education And Sports"  >
 <?php echo "Health Education And Sports" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Vocational"  >
 <?php echo "Vocational" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Fashion And Apparel Design"  >
 <?php echo "Fashion And Apparel Design" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Human Development"  >
 <?php echo "Human Development" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Costume And Fashion Technology"  >
 <?php echo "Costume And Fashion Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Computer Technology"  >
 <?php echo "Computer Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Computer Applications"  >
 <?php echo "Computer Applications" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Food Processing Technology"  >
 <?php echo "Food Processing Technology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Cognitive Systems"  >
 <?php echo "Cognitive Systems" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Statistics"  >
 <?php echo "Statistics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Computer Science"  >
 <?php echo "Computer Science" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Mathematics"  >
 <?php echo "Mathematics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Environmental Science"  >
 <?php echo "Environmental Science" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Physics"  >
 <?php echo "Physics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Economics"  >
 <?php echo "Economics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Life Sciences"  >
 <?php echo "Life Sciences" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Geography"  >
 <?php echo "Geography" ?>
</label>
</div>

                   
                    </div>
                </div>

                <div class="list-group"><br>
					<h3 class="text-light">State</h3>
                    <div style="height: 200px; overflow-y: auto; overflow-x: hidden;">
					<?php

                    $query = "SELECT DISTINCT state FROM bsc WHERE college_status = '1' ORDER BY state DESC";
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

                    $query = "SELECT DISTINCT city FROM bsc WHERE college_status = '1'ORDER BY city DESC ";
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
                    $query = " SELECT DISTINCT(university) FROM bsc WHERE college_status = '1' ORDER BY university DESC";
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
                        <label><input type="checkbox" class="common_selector exam" value="AMUEEE"  > <?php echo " AMUEEE" ?></label>
                    </div>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector exam" value="BHU UET"  > <?php echo " BHU UET" ?></label>
                    </div>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector exam" value="Brainware Entrance Test"  > <?php echo " Brainware Entrance Test" ?></label>
                    </div>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector exam" value="Christ University Entrance Test"  > <?php echo " Christ University Entrance Test" ?></label>
                    </div>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector exam" value="Jain Entrance Test"  > <?php echo " Jain Entrance Test" ?></label>
                    </div>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector exam" value="UCEED"  > <?php echo " UCEED" ?></label>
                    </div>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector exam" value="Entrance Test"  > <?php echo " Entrance Test" ?></label>
                    </div>
                    
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector exam" value="RKMVCCET"  > <?php echo " RKMVCCET" ?></label>
                    </div>
                    
                </div>
                </div>

                <div class="list-group"><br>
					<h3 class="text-light">Type</h3>
                    <div style="height: 120px; overflow-y: auto; overflow-x: hidden;">
					<?php

                    $query = "SELECT DISTINCT type FROM bsc WHERE college_status = '1' ORDER BY type DESC";
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

                    $query = "SELECT DISTINCT hostel FROM bsc WHERE college_status = '1' ORDER BY type DESC";
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

                    $query = "SELECT DISTINCT scholarship FROM bsc WHERE college_status = '1' ORDER BY scholarship DESC";
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
            url:"fetch_data_bsc.php",
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
