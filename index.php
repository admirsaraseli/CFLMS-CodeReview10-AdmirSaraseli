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
        <div class="jumbotron main_header mb-0  text-info text-sm-center ">
            <h1 class="display-4 mt-4">Big Library Media</h1>
            <p class="lead">Choose an asset.</p>
        </div>
    </header>
 	<?php include 'navbar.php';?>
    <div class="container-fluid row row-cols-1 row-cols-md-2 row-cols-lg-4 mx-auto my-4">
    <?php
    	require_once 'actions/db_connect.php';
		$sql = "SELECT medias.*, authors.name, publishers.name AS publisher_name
		FROM medias 
		INNER JOIN authors ON authors.author_id = medias.author_id
		INNER JOIN publishers ON publishers.publisher_id = medias.publisher_id";
		$result = mysqli_query($conn, $sql);
		// fetch the next row (as long as there are any) into $row
		while($row = mysqli_fetch_assoc($result)) {
			echo "
			<div class='col mb-4'>
				<div class='card px-1 py-1 bg-light h-100'>
					<h5 class='card-title text-info'>Title: ". $row['title']." </h5>
					<img src='" .$row['image']." ' class='card-img-top' alt='...' >
					<div class='card-body'>
						<h5 class='card-text mt-auto'>
						<h5 class='card-text mt-auto'>Author: ".$row['name']."</h5>
						<h5 class='card-text mt-auto'>";
						if ($row["status"] == 0) {
		                        echo "Status: <span class='text-danger'>Reserved</span>";
		                    } else {
		                        echo "Status: <span class='text-success'>Available</span>";
		                    } 
		                    echo "</h5>    
					</div>
					<div class='card-footer text-center p-1'>
						<a href='details.php?title=".$row['title']."&image=".$row['image']."&author=".$row['name']."&status=".$row['status']."&isbn=".$row['isbn']."&desc=".$row['description']."&date=".$row['publish_date']."&type=".$row['type']."&publisher=".$row['publisher_name']."' class='btn btn-outline-info btn-sm mx-auto w-75'>Show media details</a>
					</div>
					<div class='card-footer text-center p-1'>  
						<a href='update.php?id=".$row['media_id']."' class='btn btn-outline-warning btn-sm mx-auto '>Update media</a>
						<a href='delete.php?id=".$row['media_id']."' class='btn btn-outline-danger btn-sm mx-auto '>Delete media</a>	
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