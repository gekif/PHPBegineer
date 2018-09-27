<?php
$connection = mysqli_connect('localhost', 'root', 'password', 'loginapp');

if (!$connection) {
    die('Database failed to connect, the error says: ' . mysqli_error($connection));
}