<!DOCTYPE html>
<html>
<head>
	<title>Big Library</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="Travel Agency">
	<meta name="keywords" content="HTML, Bootstrap, MySQL, PHP">
	<meta name="author" content="Admir Saraseli">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="bg-info">
	<header>
        <div class="jumbotron main_header mb-0" >
            <h1 class="display-4">Big Library Media</h1>
            <p class="lead">Choose an asset.</p>
        </div>
    </header>
 	<?php include 'navbar.php';?>
    <div class="container-fluid row row-cols-1 row-cols-md-2 row-cols-lg-4 mx-auto my-4">
    <?php
    	require_once 'actions/db_connect.php';
		$sql = "SELECT * FROM publishers";
		$result = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_assoc($result)) {
			echo "
			<div class='col mb-4'>
				<div class='card px-1 py-1 bg-light h-100'>
					<h5 class='card-title text-info text-center'>Publisher: ". $row['name']."</h5>
					<div class='card-footer text-center p-1'>  
						<a href='media.php?id=".$row['publisher_id']."' class='btn btn-outline-warning btn-block mx-auto '>See Publisher Media</a>	
					</div>
				</div>
			</div>";
		}

		// Free result set
		mysqli_free_result($result);
		// Close connection
		mysqli_close($conn);

	?>
	</div>
	<div class="card-footer text-dark bg-transparent text-center font-weight-bold"> &copy; 2020 </div>

</body>
</html>