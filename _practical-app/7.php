<?php include "functions.php" ?>

<?php
$connection = mysqli_connect('localhost', 'root', 'password', 'mylist');

$query = "SELECT * FROM reports";
$result = mysqli_query($connection, $query);

?>

<?php include "includes/header.php" ?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  

	/*  Step 1 - Create a database in PHPmyadmin - mylist

		Step 2 - Create a table like the one from the lecture - report

		Step 3 - Insert some Data - done

		Step 4 - Connect to Database and read data

*/

    if (!$connection) {
        die('Database died ' . mysqli_error($connection));
    }

    if (!$result) {
        die('Query died ' . mysqli_error($connection));
    }

    while($row = mysqli_fetch_assoc($result)) {
        echo "$row[days_of_the_week] on $row[months] <br>";
    }
	
	?>






</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
