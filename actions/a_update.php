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
				$id = $_POST['media_id'];
				$author_id = $_POST['author_id'];
				$publisher_id = $_POST['publisher_id'];
		        $title = mysqli_real_escape_string($conn, $_POST['title']);
				$status = mysqli_real_escape_string($conn, $_POST[ 'status']);
				$image = mysqli_real_escape_string($conn, $_POST['image']);
				$isbn = mysqli_real_escape_string($conn, $_POST['isbn']);
				$description = mysqli_real_escape_string($conn, $_POST['description']);
				$publish_date = mysqli_real_escape_string($conn, $_POST['publish_date']);
				$type = mysqli_real_escape_string($conn, $_POST['type']);
				$name_author = mysqli_real_escape_string($conn, $_POST['name_author']);
				$name_publisher = mysqli_real_escape_string($conn, $_POST['name_publisher']);
		        

		        $sql = "UPDATE medias SET title = '$title', status = '$status', image = '$image', isbn = '$isbn' , description = '$description' , publish_date = '$publish_date', type = '$type'  
		    		WHERE media_id = {$id}; 
		    		UPDATE authors SET name = '$name_author'
		    		WHERE author_id = {$author_id} ;
		    		UPDATE publishers SET name = '$name_publisher'
		    		WHERE author_id = {$author_id}" ;
		   
		        if(mysqli_multi_query($conn, $sql) === TRUE) {
		           echo  "<h1>Successfully Updated</h1>";
		           header("Refresh: 3; url= ../index.php");
		        } else {
		            echo "Error while updating : ". mysqli_error($conn);
		        }

		        mysqli_close($conn);

		    }

		?>
 	</div>
 	<div class="card-footer text-dark bg-transparent text-center font-weight-bold"> &copy; 2020 </div>
</body>
</html>