<?php

	//fetch_data.php
	include('database_connection.php');
	//include('connect.php');
	include('functions.php');
?>

<html>
	<head>
		<script src="js/jquery-3.6.0.min.js"></script>
		<script src="js/jquery-ui.js"></script>
		<link href = "css/jquery-ui.css" rel = "stylesheet">
	</head>
</html>

<?php

if(isset($_POST["action"]))
{
	$query = "SELECT * FROM mca   WHERE college_status = '1'";
	if(isset($_POST["minimum_fees"], $_POST["maximum_fees"]) && !empty($_POST["minimum_fees"]) && !empty($_POST["maximum_fees"]))
	{
		$query .= "AND fees BETWEEN '".$_POST["minimum_fees"]."' AND '".$_POST["maximum_fees"]."'";
	}

	if(isset($_POST["state"]))
	{
		$state_filter = implode("','", $_POST["state"]);
		$query .= "AND state IN('".$state_filter."')";
	}

	if(isset($_POST["city"]))
	{
		$city_filter = implode("','", $_POST["city"]);
		$query .= "AND city IN('".$city_filter."')";
	}
	if(isset($_POST["university"]))
	{
		$university_filter = implode("','", $_POST["university"]);
		$query .= "AND university IN('".$university_filter."')";
	}
	if(isset($_POST["exam"]))
	{
		$data = $_POST['exam'];
		foreach($data as $code)
		{
			$query .= "AND exam LIKE '%".$code."%'";
		}
	}
	if(isset($_POST["type"]))
	{
		$type_filter = implode("','", $_POST["type"]);
		$query .= "AND type IN('".$type_filter."')";
	}
	if(isset($_POST["hostel"]))
	{
		$hostel_filter = implode("','", $_POST["hostel"]);
		$query .= "AND hostel IN('".$hostel_filter."')";
	}
	if(isset($_POST["scholarship"]))
	{
		$scholarship_filter = implode("','", $_POST["scholarship"]);
		$query .= "AND scholarship IN('".$scholarship_filter."')";
	}
	
	$query .= " ORDER BY nirf ,approve_no DESC ,placement DESC ,seats DESC ";

	
	
	//print_r($query);
	
	

	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	//print_r($total_row);
	
	if($total_row > 0)
	{
		
		foreach($result as $row )
		{
?>
			<div class="col-sm-4 col-lg-3 col-md-4">
				<div style="position:relative; border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:590px;">
					
					
					<img src="<?php echo "mca/". $row['image']?>" alt="" class="img-responsive" >
					
					<p align="center"><strong><a href="<?php echo $row['officialwebsite']?>"><?php echo htmlspecialchars_decode($row['collegename'])?></a></strong></p>
					<h6 style="text-align:center;" class="text-light" ><?php echo $row['state']?></h6>
					<h8 style="text-align:right;" class="text-light"><?php echo "City : ".$row['city']?> </h8><br>
					
					<h8 style="text-align:right;" class="text-light"><?php echo "Phone : ". $row['phn']?> </h8><br>
					<h8 style="text-align:right;" class="text-light"><?php echo "University : ". $row['university']?></h8><br>
					<h8 style="text-align:right;" class="text-light"><?php echo "Fees : ". $row['fees']."/- "?></h8><br>
					
					
					<h8 style="text-align:right;" class="text-light"><?php echo "Seat Availibility: ". $row['seats']?></h8><br> 
					<h8 style="text-align:right;" class="text-light"><?php echo "Nirf Ranking: ". $row['nirf']?></h8><br>
					<h8 style="text-align:right;" class="text-light"><?php echo "Approved By: ". $row['approvedby']?></h8><br>
				   
					</p>
					
					<a href="javascript:void(0)" onclick="wishlist_manage('<?php echo $row['collegename']?>','<?php echo $row['officialwebsite']?>','<?php echo "mca/".$row['image']?>','<?php echo $row['city']?>','add')"><button type="button" style="position:absolute; bottom:10px ;" class="btn btn-outline-info btn-sm">Add to Wishlist</button></a>
					
				</div>
			</div>
<?php
			}
	}
	else
	{?>
		<h2 style="text-align:center;" class="text-light">No Data Found</h2>
<?php
	}
}
?>