<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
// Open file
$file = 'text1.txt';
$file2 = 'delete.txt';
//$handle = fopen($file, 'w');

//writing file
/*if ($handle = fopen($file, 'w')) {
    fwrite($handle, 'Paehhhh');

    fclose($handle);
} else {
    echo 'zonkk';
}*/

//Reading File
/*if ($handle = fopen($file, 'r')) {
    echo $content = fread($handle, filesize($file)); // each bite equals a character
    fclose($handle);
} else {
    echo 'zonk';
}*/

//Delete File
$delete = unlink($file2);

if ($delete) {
    echo 'delete success';
} else {
    echo 'plet';
}





?>

</body>
</html>