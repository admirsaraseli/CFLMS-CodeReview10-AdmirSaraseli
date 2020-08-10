<?php 
    require_once 'actions/db_connect.php';

    if ($_GET['id']) {
        $id = $_GET['id'];

        $sql = "SELECT medias.*, authors.*, publishers.publisher_id, publishers.name AS name_publisher
        FROM medias 
        INNER JOIN authors ON authors.author_id = medias.author_id
        INNER JOIN publishers ON publishers.publisher_id = medias.publisher_id 
        WHERE media_id = {$id}" ;
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($result);
       
        mysqli_close($conn);

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
    
     <div class="container mx-auto font-weight-bold mt-2 px-4 py-4">
        <form action="actions/a_update.php" method ="post" [formGroup]="checkoutForm">
            <div class="form-row justify-content-center">
                <div class="col-sm-8">
                    <label for="status" class="mr-3 my-auto">Status:</label>
                     <?php if ($data['status'] == 1) {
                        echo '
                        <input type="radio"  name="status" checked value="1"><span class="mr-2"> Available</span>
                        <input type="radio"  name="status" value="0"> Reserved';
                    }else {
                        echo '
                        <input type="radio"  name="status"  value="1" ><span class="mr-2"> Available</span>
                        <input type="radio"  name="status" checked value="0"> Reserved';
                    }  ?>
                </div>
            </div>
            <div class="form-row justify-content-center">
                <div class="col-sm-4">
                    <label for="title">Title: </label>
                    <input type="text" class="form-control" name="title" placeholder="Media title"
                    value="<?php echo $data['title'] ?>">
                </div>
                <div class="col-sm-4">
                    <label for="type">Type: </label>
                    <input type="text" class="form-control" name="type" placeholder="Media type (book, video, ect)" value="<?php echo $data['type'] ?>">
                </div>
            </div>
             <div class="form-row justify-content-center">
                <div class="col-sm-4">
                    <label for="name_author">Author: </label>
                    <input type="text" class="form-control" name="name_author" 
                    placeholder="Media author" value="<?php echo $data['name'] ?>">
                </div>
                <div class="col-sm-4">
                    <label for="isbn">Isbn: </label>
                    <input type="text" class="form-control" name="isbn" placeholder="Isbn code"
                    value="<?php echo $data['isbn'] ?>">
                </div>
            </div>
            <div class="form-row justify-content-center">
                <div class="col-sm-4">
                    <label for="name_publisher">Publisher: </label>
                    <input type="text" class="form-control" name="name_publisher" 
                    placeholder="Media publisher" value="<?php echo $data['name_publisher'] ?>">
                </div>
                <div class="col-sm-4">
                    <label for="publish_date">Publish date: </label>
                    <input type="publish_date" class="form-control" name="publish_date" 
                    placeholder="Publish date" value="<?php echo $data['publish_date'] ?>">
                </div>
            </div>   
            <div class="form-row justify-content-center">
                <div class="col-sm-8">
                    <label for="image">Image: </label>
                    <input type="text" class="form-control" name="image" placeholder="Media image path" value="<?php echo $data['image'] ?>">
                </div>
            </div>
            <div class="form-row justify-content-center">
                <div class="col-sm-8">
                    <label for="description">Description: </label>
                    <input type="text" class="form-control" name="description" placeholder="Media short description" value="<?php echo $data['description'] ?>">
                </div>
            </div>
            <div class="form-row justify-content-center">  
                <div class="col-sm-8 mx-auto mt-3">
                    <input type= "hidden" name= "media_id" value="<?php echo $data['media_id'] ?>" />
                    <input type= "hidden" name= "author_id" value="<?php echo $data['author_id'] ?>" />
                    <input type= "hidden" name= "publisher_id" value="<?php echo $data['publisher_id'] ?>" />
                    <input type="submit" class="btn btn-warning mx-auto font-weight-bold" 
                    value="Save data">
                    <a href= "index.php">
                        <input type="button" class="btn btn-secondary mx-auto font-weight-bold" 
                        value="Back">
                    </a>
                </div>
            </div>
        </form>
    </div>
    <div class="card-footer text-dark bg-transparent text-center font-weight-bold"> &copy; 2020 </div>
</body>
</html>

<?php
}
?>