<?php

include 'includes/db.php';
include 'includes/functions.php';
include 'includes/header.php';
include 'includes/footer.php';

if (isset($_POST['submit'])) {
    createTable();
}
?>

<div class="container">

    <div class="col-xs-6">
        <h1 class="text-center">Create</h1>
        <form method="post" action="login_create.php">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Create">
        </form>
    </div>

</div>

