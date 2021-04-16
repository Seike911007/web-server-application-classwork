<!DOCTYPE html>
<html>
<head>
	<title>amiibo
	</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>

	<div class='container'>


		<?php include 'nav.php';?>

		<div class='row'>
		<center><img src="img/1.jpg" width='100%'></center>
		
		<div class="col-md-12 col-sm-12 col-xs-12 section-header ">

          <h1>Amiibo Information</h1>
          <p class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1 col-xl-12">Learn what you want to know about Nintendo's amiibo!
</p>
        </div>
<?php

	include 'config.php';



	$sql = "SELECT * FROM game";
	$result = mysqli_query($connection, $sql);

	if(mysqli_num_rows($result) > 0 ){
		while($row = mysqli_fetch_assoc($result)){
		echo "<div class='col-lg-4 col-12 col-md-6 col-sm-6  text-xs-center'>
		      <div class='service-box'>
				<center><img src='".$row["image"]."' height='100px'></center>
				</br>
				<h5><center>".$row["gameseries"]."</center></a></h5>
				<a href='detail.php?gameseries=".$row["gameseries"]."'class='btn btn-success btn-block'>Detail</a>

				</td><tr>
				</div>
				</div>
				";
				
			}
		echo "</table>";
	}

mysqli_close($connection);






?>


		</div>
	</div>

</body>
</html>