<?php

include 'db.php';

$usename = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];

$query = "UPDATE users SET username = '$username', password = '$password' WHERE 
          id = $id ";

$result = mysqli_query($connection, $query);

if (!$result) {
    die('Data cannot update, the error says: ' . mysqli_error($connection));
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MySQL</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">

    <div class="col-xs-6">
        <form method="post" action="login_create.php">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <div class="form-group">
                <select name="id" id="">
                    <option value="">Id</option>
                </select>
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="Update">

    </div>

</div>

</body>
</html>