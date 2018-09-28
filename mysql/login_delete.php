<?php
include 'db.php';
include 'functions.php';

if (isset($_POST['submit'])) {
    deleteTable();
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
        <form method="post" action="login_delete.php">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" value="">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" value="">
            </div>

            <div class="form-group">
                <select name="id">
                    <?php
                        showAllData();
                    ?>
                </select>
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="Delete">
        </form>
    </div>

</div>

</body>
</html>