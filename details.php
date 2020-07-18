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
        <div class="card col-sm-5 mx-auto">
            <h5 class="card-title">Title: <?php echo $_GET['title'] ?>, 
            <span class="text-info">Type: <?php echo $_GET['type'] ?></span></h5>
            <img src="<?php echo $_GET['image'] ?>" class="card-img-top">
            <div class="card-body"> 
                <p class="card-text"><?php echo $_GET['desc'] ?></p>
            </div>
            <ul class="list-group list-group-flush p-1">
                <li class="list-group-item p-1">Author: <?php echo $_GET['author'] ?>, 
                <span class="text-info">isbn: <?php echo $_GET['isbn'] ?></span></li> 
                <li class="list-group-item p-1">Publisher: <?php echo $_GET['publisher'] ?>, 
                 <span class="text-info">date: <?php echo $_GET['date'] ?></span></li>
                <li class="list-group-item p-1">
                    <label for="status" class="mr-3">Status:</label>
                     <?php if ($_GET['status'] == 1) {
                        echo '<span class="text-success">Available</span>'; 
                    }else {
                        echo '<span class="text-danger">Reserved</span>';
                    }  ?>
                </li>
            </ul>
            <div class="card-body">
                <a href='index.php' class="btn btn-secondary btn-block mx-auto">Back</a>
            </div>
        </div>
    </div>
    <div class="card-footer text-dark bg-transparent text-center font-weight-bold"> &copy; 2020 </div>
</body>
</html>