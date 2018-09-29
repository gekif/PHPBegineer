<?php

include 'includes/db.php';
include 'includes/header.php';
include 'includes/footer.php';

$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);

if (!$result) {
    die('Data cannot select, the error says: ' . mysqli_error($connection));
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
        <h1 class="text-center">Read</h1>
        <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "$row[username] and $row[password]";
                echo '<br>';
            }
        ?>
    </div>

</div>

</body>
</html>