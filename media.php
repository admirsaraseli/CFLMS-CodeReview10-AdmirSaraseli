<?php 
    require_once 'actions/db_connect.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Big Library</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="bg-info">
    <?php include 'navbar.php';?>

    <div class="container-fluid row row-cols-1 row-cols-md-2 row-cols-lg-4 mx-auto my-4">
        <ul class="list-group list-group-flush p-1">
            <?php
                 if ($_GET['id']) {
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM medias where publisher_id = {$id}" ;
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "
                        <li class='list-group-item p-1'>Media: ". $row['title']." </li>";
                    }
                        echo "
                        <li class='list-group-item p-1'>
                            <a href='publishers.php' class='btn btn-secondary btn-block '>Back</a>
                        </li>";
                    // Close connection
                    mysqli_close($conn);
                }

            ?>
        </ul>
        
    </div>
    <div class="card-footer text-dark bg-transparent text-center font-weight-bold"> &copy; 2020 </div>
</body>
</html>