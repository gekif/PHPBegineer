<?php
include 'db.php';

function encrypt($password) {
    $hashFormat = "$2y$10$";
    $salt = "iusesomecrazystrings22";
    $hash_and_salt = $hashFormat . $salt;
    $password = crypt($password, $hash_and_salt);
    return $password;
}

function showAllData() {
    global $connection;

    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Data cannot update, the error says: ' . mysqli_error($connection));
    }

    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}


function updateTable() {
    global $connection;

    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $password = encrypt($password);
    $id = mysqli_real_escape_string($connection, $_POST['id']);

    $query = "UPDATE users SET 
                  username = '$username', 
                  password = '$password' 
              WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Data cannot updated, the error says ' . mysqli_error($connection));
    }else {
        echo 'Update Success';
    }

}


function createTable() {
    global $connection;

    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $password = encrypt($password);

    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Data cannot insert, the error says: ' . mysqli_error($connection));
    } else {
        echo 'Insert Success';
    }
}


function deleteTable() {
    global $connection;

    $id = mysqli_real_escape_string($connection, $_POST['id']);

    $query = "DELETE FROM users 
              WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Data cannot deleted, the error says: ' . mysqli_error($connection));
    } else {
        echo 'Delete Success';
    }
}
