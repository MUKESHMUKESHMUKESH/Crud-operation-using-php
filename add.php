<?php
// Establish a connection to the MySQL database
$connection = mysqli_connect("localhost", "root", "", "crud operation", 3308);

// Check if the connection was successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the database exists
$db = mysqli_select_db($connection, "crud operation");

if (!$db) {
    die("Database selection failed: " . mysqli_error($connection));
}

if (isset($_POST['submit'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobilenumber = $_POST['mobilenumber'];
    $password = $_POST['password'];

    // Insert data into the database
    $sql = "INSERT INTO crud (name, email, mobilenumber, password) VALUES ('$name', '$email', '$mobilenumber', '$password')";

    if (mysqli_query($connection, $sql)) {
        echo '<script> location.replace("index.php")</script>';
    } else {
        echo "Something went wrong: " . $connection->error;
    }
}
?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
            <div class="card" >
                <div class="card-header">
                      <h1>Crud operation</h1>
                </div>
                <div class="card-body">
                                <form action="add.php" method="post">
                                    <div class="form-group">
                                   
                                    <div class="form-group">
                                    <label>Name</label>
                                        <input type="text"name = "name"  class="form-control"  placeholder="Enter name">
                                           
                                    </div>
                                    <div class="form-group">
                                    <label>Email</label>
                                        <input type="text" name = "email"  class="form-control"  placeholder="Enter mail">
                                           
                                    </div>
                                    <div class="form-group">
                                    <label>mobilenumber</label>
                                        <input type="text"name = "mobilenumber"  class="form-control"  placeholder="Enter mobile number">
                                           
                                    </div>
                                    <div class="form-group">
                                    <label>password</label>
                                        <input type="text" name = "password"  class="form-control"  placeholder="Enter Password">
                                           
                                    </div>
                                      </br>
                                    <input type="submit" class="btn btn-primary" name = "submit" value = "Register"s>
                             </form>
                </div>
            </div>
        </div>
    </div>
    </div>   
        </div>
        


    
    
</body>
</html>
