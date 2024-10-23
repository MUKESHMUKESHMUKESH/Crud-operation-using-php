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
                <button class="btn btn-success"> <a href="add.php" class = "text-light">Add new</a></button>

                <br/>
                <br/>
                <table class="table">
            <thead>
               <tr>
                 <th scope="col">id</th>
                 <th scope="col">name</th>
                 <th scope="col">email</th>
                 <th scope="col">mobilenumber</th>
                 <th scope="col">password</th>
                 <th scope="col">option</th>
                </tr>
             </thead>
             <tbody>
                    <?php
                    $connection = mysqli_connect("localhost", "root", "", "crud operation", 3308);

                    $db = mysqli_select_db($connection,"crud operation");

                    $sql = "SELECT * FROM crud";
                    $run = mysqli_query($connection,$sql);
                    
                    $id =1;
                    while($row = mysqli_fetch_array($run))
                    {
                        $uid =  $row['id'];
                        $name =  $row['name'];
                        $email =  $row['email'];
                        $mobilenumber =  $row['mobilenumber'];
                        $password =  $row['password'];
                    
                ?>
                <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $name ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $mobilenumber ?></td>
                    <td><?php echo $password ?></td>
                    <td>
                        <button class="btn btn-success"><a href = 'edit.php?edit=<?php echo $uid ?>' class="text-light">edit</a></button>&nbsp;
                        <button class="btn btn-success"><a href = 'delete.php?del=<?php echo $uid ?>' class="text-light">delete</a></button>
                    </td>
                </tr>
                  <?php $id++;} ?>
               </tbody>
               </table>
                </div>
            </div>
        </div>
    </div>
    </div>   
        </div>
        


    
    
</body>
</html>
