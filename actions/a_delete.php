<!DOCTYPE html>
<html>
<head>
  <title>Big Library</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="bg-info">
    <?php include 'navbar.php';?>

	<div class="container mt-4 mx-auto text-center">

	<?php 

		require_once 'db_connect.php';

		if ($_POST) {
			$id = $_POST['id'];
			$author_id = $_POST['author_id'];
			$publisher_id = $_POST['publisher_id'];

			$sql = "DELETE FROM medias WHERE media_id = {$id};
					DELETE FROM authors WHERE author_id = {$author_id};
					DELETE FROM publishers WHERE publisher_id = {$publisher_id}";

			if($conn->multi_query($sql) === TRUE) {
				echo "<h1>Successfully deleted!!</h1>" ;
				header("Refresh: 3; url= ../index.php");
			} else {
			echo "Error updating record : " . $conn->error;
			}

			$conn->close();
		}

	?>

    </div>
    <div class="card-footer text-dark bg-transparent text-center font-weight-bold"> &copy; 2020 </div>
</body>
</html>