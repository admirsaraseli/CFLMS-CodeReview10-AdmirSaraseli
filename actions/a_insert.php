<!DOCTYPE html>
<html>
<head>
  <title>Big Library</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="bg-info">
  	<?php include 'navbar.php'; ?>
  	
    <div class="container mt-4 mx-auto text-center">
		<?php
			require_once 'db_connect.php';

			// Escape user inputs for security
			$title = mysqli_real_escape_string($conn, $_POST['title']);
			$status = mysqli_real_escape_string($conn, $_POST[ 'status']);
			$image = mysqli_real_escape_string($conn, $_POST['image']);
			$isbn = mysqli_real_escape_string($conn, $_POST['isbn']);
			$description = mysqli_real_escape_string($conn, $_POST['description']);
			$publish_date = mysqli_real_escape_string($conn, $_POST['publish_date']);
			$type = mysqli_real_escape_string($conn, $_POST['type']);
			$name_author = mysqli_real_escape_string($conn, $_POST['name_author']);
			$name_publisher = mysqli_real_escape_string($conn, $_POST['name_publisher']);

			// attempt insert query execution
			$sqlauthor = "INSERT INTO authors (name) VALUES ('$name_author')";
			if ($conn->query($sqlauthor) === TRUE) {
  				$author_id = $conn->insert_id;
  			}
			$sqlpublisher = "INSERT INTO publishers (name) VALUES ('$name_publisher')";
			if ($conn->query($sqlpublisher) === TRUE) {
  				$publisher_id = $conn->insert_id;
  			}
			$sql = "INSERT INTO medias 
			(title, status, image, isbn, description, publish_date, type, author_id, publisher_id) 
			VALUES 
			('$title', '$status', '$image', '$isbn', '$description', '$publish_date', '$type', $author_id, $publisher_id)";
			
			if (mysqli_query($conn, $sql)) {
			    echo "<h1>New media created.<h1>";
			    header("Refresh: 3; url= ../index.php");
			} else {
			    echo "<h1 class='text-red'>Something went wrong, please try again: </h1>" .
			         "<p>"  . $sql . "</p>" .
			         mysqli_error($conn);
			}
			mysqli_close($conn);
		
		?>
    </div>
    <div class="card-footer text-dark bg-transparent text-center font-weight-bold"> &copy; 2020 </div>
</body>
</html>