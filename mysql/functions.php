<?php
include 'db.php';

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
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

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

    $username = $_POST['username'];
    $password = $_POST['password'];

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
    $id = $_POST['id'];

    $query = "DELETE FROM users 
              WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Data cannot deleted, the error says: ' . mysqli_error($connection));
    } else {
        echo 'Delete Success';
    }

}