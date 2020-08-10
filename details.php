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
  
    <div class="container-fluid row row-cols-1 row-cols-md-2 row-cols-lg-2 mx-auto my-4">
        <div class="col mb-4 mx-auto">
            <div class="card px-1 py-1 bg-light h-100">
                <h5 class="card-title">Title: <?php echo $_GET['title'] ?>, 
                <span class="text-info ">Type: <?php echo $_GET['type'] ?></span></h5>
                <img src="<?php echo $_GET['image'] ?>" class="card-img-top">
                <div class="card-body"> 
                    <p class="card-text"><?php echo $_GET['desc'] ?></p>
                </div>
                <ul class="list-group list-group-flush p-1">
                    <li class="list-group-item p-1">Author: <?php echo $_GET['author'] ?>, 
                    <span class="text-info ">isbn: <?php echo $_GET['isbn'] ?></span></li> 
                    <li class="list-group-item p-1">Publisher: <?php echo $_GET['publisher'] ?>, 
                     <span class="text-info ">date: <?php echo $_GET['date'] ?></span></li>
                    <li class="list-group-item p-1">
                        <label for="status" class="mr-3">Status:</label>
                         <?php if ($_GET['status'] == 1) {
                            echo '<span class="text-success">Available</span>'; 
                        }else {
                            echo '<span class="text-danger">Reserved</span>';
                        }  ?>
                    </li>
                </ul>
                <div class="card-footer">
                    <a href='index.php' class="btn btn-secondary btn-block mx-auto">Back</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer text-dark bg-transparent text-center font-weight-bold"> &copy; 2020 </div>
</body>
</html>