<!DOCTYPE html>
<html>
<head>
    <title>Big Library</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <form action="actions/a_insert.php" method ="post" [formGroup]="checkoutForm">
            <div class="form-row justify-content-center">
                <div class="col-sm-8">
                    <label for="status" class="mr-3">Status:</label>
                    <input type="radio" name="status" checked value="1"><span class="mr-2"> Available</span> 
                    <input type="radio" name="status" value="0"> Reserved
                </div>
            </div>
            <div class="form-row justify-content-center">
                <div class="col-sm-4">
                    <label for="title">Title: </label>
                    <input type="text" class="form-control" name="title" placeholder="Media title">
                </div>
                <div class="col-sm-4">
                    <label for="type">Type: </label>
                    <input type="text" class="form-control" name="type" placeholder="Media type (book, video, ect)">
                </div>
            </div>
            <div class="form-row justify-content-center">
                <div class="col-sm-4">
                    <label for="name_author">Author: </label>
                    <input type="text" class="form-control" name="name_author" 
                    placeholder="Media author">
                </div>
                <div class="col-sm-4">
                    <label for="isbn">Isbn: </label>
                    <input type="text" class="form-control" name="isbn" placeholder="Isbn code">
                </div>
            </div>
            <div class="form-row justify-content-center">
                <div class="col-sm-4">
                    <label for="name_publisher">Publisher: </label>
                    <input type="text" class="form-control" name="name_publisher" 
                    placeholder="Media publisher">
                </div>
                <div class="col-sm-4">
                    <label for="publish_date">Publish date: </label>
                    <input type="publish_date" class="form-control" name="publish_date" 
                    placeholder="Publish date">
                </div>
            </div>
            <div class="form-row justify-content-center">
                <div class="form-group col-sm-8">
                    <label for="image">Image: </label>
                    <input type="text" class="form-control" name="image" placeholder="Media image path">
                </div>
            </div>
            <div class="form-row justify-content-center">
                <div class="form-group col-sm-8 ">
                    <label for="description">Description: </label>
                    <input type="text" class="form-control" name="description" placeholder="Media short description">
                </div>
            </div>  
            <div class="col-sm-4 mx-auto">
                <input type="submit" class="btn btn-danger form-control" value="Submit">
            </div>
        </form>
    </div>
    <div class="card-footer text-dark bg-transparent text-center font-weight-bold"> &copy; 2020 </div>
</body>
</html>