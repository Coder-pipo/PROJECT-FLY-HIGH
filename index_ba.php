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
					<input type="hidden" id="hidden_minimum_fees" value="500" />
                    <input type="hidden" id="hidden_maximum_fees" value="1500000" />
                    <p class="text-light"id="fees_show">500 - 1500000</p>
                    <div id="fees_range"></div>
                </div>
                <div class="list-group "><br>
					<h3 class="text-light">Stream</h3>
                    <div style="height:200px; overflow-y: auto; overflow-x: hidden;">
                    <div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Psychology"  >
 <?php echo "Psychology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Economics"  >
 <?php echo "Economics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="English"  >
 <?php echo "English" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Journalism"  >
 <?php echo "Journalism" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Political Science"  >
 <?php echo "Political Science" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Sociology"  >
 <?php echo "Sociology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Philosophy"  >
 <?php echo "Philosophy" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="History"  >
 <?php echo "History" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Sanskrit"  >
 <?php echo "Sanskrit" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Hindi"  >
 <?php echo "Hindi" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="English"  >
 <?php echo "English" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Geography"  >
 <?php echo "Geography" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Music"  >
 <?php echo "Music" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Bengali"  >
 <?php echo "Bengali" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Political Science"  >
 <?php echo "Political Science" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="French"  >
 <?php echo "French" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Japanese"  >
 <?php echo "Japanese" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Arabic"  >
 <?php echo "Arabic" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="German"  >
 <?php echo "German" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Spanish"  >
 <?php echo "Spanish" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Korean"  >
 <?php echo "Korean" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Russian"  >
 <?php echo "Russian" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Chinese"  >
 <?php echo "Chinese" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Pashto"  >
 <?php echo "Pashto" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Persian"  >
 <?php echo "Persian" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Geography"  >
 <?php echo "Geography" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Urdu"  >
 <?php echo "Urdu" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Economics"  >
 <?php echo "Economics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="French"  >
 <?php echo "French" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Tamil"  >
 <?php echo "Tamil" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="English Literature"  >
 <?php echo "English Literature" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Tamil Literature"  >
 <?php echo "Tamil Literature" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Urdu Literature"  >
 <?php echo "Urdu Literature" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Hindi Literature"  >
 <?php echo "Hindi Literature" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Malayalam"  >
 <?php echo "Malayalam" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Travel and Tourism"  >
 <?php echo "Travel and Tourism" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="English and Communication"  >
 <?php echo "English and Communication" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Business Economics"  >
 <?php echo "Business Economics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Karnatak Music"  >
 <?php echo "Karnatak Music" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="History Of Fine Arts"  >
 <?php echo "History Of Fine Arts" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="History & Tourism"  >
 <?php echo "History & Tourism" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="English Literature"  >
 <?php echo "English Literature" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Ancient Indian Culture"  >
 <?php echo "Ancient Indian Culture" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Statistics"  >
 <?php echo "Statistics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Anthropology"  >
 <?php echo "Anthropology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Politics"  >
 <?php echo "Politics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Mathematics"  >
 <?php echo "Mathematics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Marathi"  >
 <?php echo "Marathi" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Applied Statistics"  >
 <?php echo "Applied Statistics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Banking"  >
 <?php echo "Banking" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="General"  >
 <?php echo "General" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Psychology"  >
 <?php echo "Psychology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Music"  >
 <?php echo "Music" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Vocational Studies"  >
 <?php echo "Vocational Studies" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Dance"  >
 <?php echo "Dance" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Lalit Kala"  >
 <?php echo "Lalit Kala" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Drama And Theatre"  >
 <?php echo "Drama And Theatre" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Restructure"  >
 <?php echo "Restructure" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Applied Psychology"  >
 <?php echo "Applied Psychology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Liberal Arts"  >
 <?php echo "Liberal Arts" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Mass Communication"  >
 <?php echo "Mass Communication" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Functional English"  >
 <?php echo "Functional English" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Animation And Graphic Design"  >
 <?php echo "Animation And Graphic Design" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Journalism"  >
 <?php echo "Journalism" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Journalism and Mass Communication"  >
 <?php echo "Journalism and Mass Communication" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="English Language And English Literature"  >
 <?php echo "English Language And English Literature" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Communicative English"  >
 <?php echo "Communicative English" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Public Administration"  >
 <?php echo "Public Administration" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Multimedia"  >
 <?php echo "Multimedia" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="English And History"  >
 <?php echo "English And History" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Mass Communication"  >
 <?php echo "Mass Communication" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Economics And Development Economics"  >
 <?php echo "Economics And Development Economics" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Travel And Tourism Management"  >
 <?php echo "Travel And Tourism Management" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Violin"  >
 <?php echo "Violin" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Malayalam And Sociology"  >
 <?php echo "Malayalam And Sociology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Afzal-Ul-Ulama"  >
 <?php echo "Afzal-Ul-Ulama" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Islamic History"  >
 <?php echo "Islamic History" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Islamic Studies"  >
 <?php echo "Islamic Studies" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Kannada"  >
 <?php echo "Kannada" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Music Vocal"  >
 <?php echo "Music Vocal" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Computer Applications"  >
 <?php echo "Computer Applications" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="West Asian Studies"  >
 <?php echo "West Asian Studies" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Arabic And Islamic History"  >
 <?php echo "Arabic And Islamic History" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Veena"  >
 <?php echo "Veena" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Islamic Finance"  >
 <?php echo "Islamic Finance" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Post Oriental Title"  >
 <?php echo "Post Oriental Title" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Mridangam"  >
 <?php echo "Mridangam" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Arabic Language And Literature"  >
 <?php echo "Arabic Language And Literature" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Economics With Foreign Trade"  >
 <?php echo "Economics With Foreign Trade" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Arabic And History"  >
 <?php echo "Arabic And History" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Hindi And History"  >
 <?php echo "Hindi And History" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Arabic"  >
 <?php echo "Arabic" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Sanskrit Literature"  >
 <?php echo "Sanskrit Literature" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Criminology"  >
 <?php echo "Criminology" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Visual Communication"  >
 <?php echo "Visual Communication" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Police Science"  >
 <?php echo "Police Science" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Environmental Studies"  >
 <?php echo "Environmental Studies" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Education"  >
 <?php echo "Education" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Comparative Literature"  >
 <?php echo "Comparative Literature" ?>
</label>
</div>
<div class="list-group-item checkbox">
<label><input type="checkbox" class="common_selector stream" value="Performing Arts"  >
 <?php echo "Performing Arts" ?>
</label>
</div>


                    </div>
                </div>

                <div class="list-group"><br>
					<h3 class="text-light">State</h3>
                    <div style="height: 200px; overflow-y: auto; overflow-x: hidden;">
					<?php

                    $query = "SELECT DISTINCT state FROM ba WHERE college_status = '1' ORDER BY state DESC";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->mysqli_fetch_all();
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

                    $query = "SELECT DISTINCT city FROM ba WHERE college_status = '1'ORDER BY city DESC ";
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
                    $query = " SELECT DISTINCT(university) FROM ba WHERE college_status = '1' ORDER BY university DESC";
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

                <div class="list-group"><br>
					<h3 class="text-light">Type</h3>
                    <div style="height: 120px; overflow-y: auto; overflow-x: hidden;">
					<?php

                    $query = "SELECT DISTINCT type FROM ba WHERE college_status = '1' ORDER BY type DESC";
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

                    $query = "SELECT DISTINCT hostel FROM ba WHERE college_status = '1' ORDER BY type DESC";
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

                    $query = "SELECT DISTINCT scholarship FROM ba WHERE college_status = '1' ORDER BY scholarship DESC";
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
        //var exam = get_filter('exam');
        var type = get_filter('type');
        var hostel = get_filter('hostel');
        var scholarship = get_filter('scholarship');
        

        $.ajax({
            url:"fetch_data_ba.php",
            method:"POST",
            data:{action:action, minimum_fees:minimum_fees, maximum_fees:maximum_fees, stream:stream, state:state, city:city, university:university,type:type, hostel:hostel, scholarship:scholarship },
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
        min:500,
        max:1500000,
        values:[500, 1500000],
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
