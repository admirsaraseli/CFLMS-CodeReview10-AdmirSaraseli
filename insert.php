<!DOCTYPE html>
<html>
<head>
  <title>Big Library</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="bg-info">
    <?php include 'navbar.php';?>
    <header>
        <div class="jumbotron main_header" >
            <h1 class="display-4"></h1>
            <p class="lead"></p>
        </div>
    </header>
    <div class="container mx-auto font-weight-bold">
        <form action="actions/a_insert.php" method ="post" class="mx-auto" >
            <div class="form-group row justify-content-center">
                <div class="form-group col-sm-8">
                    <label for="status" class="mr-3">Status:</label>
                    <input type="radio" name="status" checked value="1"><span class="mr-2"> Available</span> 
                    <input type="radio" name="status" value="0"> Reserved
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-sm-4">
                    <label for="title">Title: </label>
                    <input type="text" class="form-control" name="title" placeholder="Media title">
                </div>
                <div class="col-sm-4">
                    <label for="type">Type: </label>
                    <input type="text" class="form-control" name="type" placeholder="Media type (book, video, ect)">
                </div>
            </div>
            <div class="form-group row justify-content-center">
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
            <div class="form-group row justify-content-center">
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
            <div class="form-group row justify-content-center">
                <div class="form-group col-sm-8">
                    <label for="image">Image: </label>
                    <input type="text" class="form-control" name="image" placeholder="Media image path">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="form-group col-sm-8 ">
                    <label for="description">Description: </label>
                    <input type="text" class="form-control" name="description" placeholder="Media short description">
                </div>
            </div>  
            <div class="form-group col-sm-4 mx-auto">
                <input type="submit" class="btn btn-danger form-control" value="Submit">
            </div>
        </form>
    </div>
    <div class="card-footer text-dark bg-transparent text-center font-weight-bold"> &copy; 2020 </div>
</body>
</html>