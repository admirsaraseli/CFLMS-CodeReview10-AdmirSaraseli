<?php 

	require_once 'actions/db_connect.php';

	if ($_GET['id']) {
		$id = $_GET['id'];
		$sql = "SELECT author_id, publisher_id FROM medias WHERE media_id = {$id}" ;
		$result = $conn->query($sql);
		$data = $result->fetch_assoc();

	    $conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Big Library</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="Big Library">
	<meta name="keywords" content="HTML, Bootstrap, MySQL, PHP">
	<meta name="author" content="Admir Saraseli">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="bg-info">
	<?php include 'navbar.php';?>
	<div class="container mt-4 mx-auto text-center">
		<h3>Do you really want to delete this media?</h3>
		<form action ="actions/a_delete.php" method="post">
			<input type="hidden" name="author_id" value="<?php echo $data['author_id'] ?>" />
			<input type="hidden" name="publisher_id" value="<?php echo $data['publisher_id'] ?>" />
			<input type="hidden" name="id" value="<?php echo $id ?>" />
		    <button class="btn btn-danger" type="submit">Yes, delete it!</button >
		    <a href="index.php"><button class="btn btn-secondary" type="button">No, go back!</button></a>
		</form>
	</div>
	<div class="card-footer text-dark bg-transparent text-center font-weight-bold"> &copy; 2020 </div>
</body>
</html>

<?php
}
?>