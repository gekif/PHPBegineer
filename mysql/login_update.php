<?php
include 'db.php';
include 'functions.php';
include 'header.php';
include 'footer.php';

if (isset($_POST['submit'])) {
    updateTable();
}
?>



<div class="container">

    <div class="col-xs-6">
        <h1 class="text-center">Update</h1>
        <form method="post" action="login_update.php">
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

            <input class="btn btn-primary" type="submit" name="submit" value="Update">
        </form>
        <a href="index.php">back to menu</a>
    </div>

</div>
