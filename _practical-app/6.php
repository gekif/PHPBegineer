
<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

<?php

/*  Step1: Make a form that submits one value to POST super global
 */

// Method 1
/*if (isset($_POST['submit'])) {
    if ($_POST['username'] == '' || $_POST['password'] == ''){
        echo 'insert your username and password';
    } else {
        echo "Your username is $_POST[username] and your password is $_POST[password]";
    }
}*/

// Method 2
/*$require = ['username', 'password'];
$error = true;
foreach ($require as $field) {
    if (!isset($_POST[$field]) || empty($_POST[$field]))  {
        $error = false;
    }
}

if (isset($_POST['submit'])) {
    if (!$error) {
        echo 'insert your username and password';
    } else {
        echo "Your username is $_POST[username] and your password is $_POST[password]";
    }
}*/

// Method 3
/*$require = ['username', 'password'];
$error = false;
foreach ($require as $field) {
    if ($_POST[$field] == '')  {
        $error = true;
    }
}

if (isset($_POST['submit'])) {
    if ($error) {
        echo 'insert your username and password';
    } else {
        echo "Your username is $_POST[username] and your password is $_POST[password]";
    }
}*/

// Method 4
/*$require = ['username', 'password'];
$error = false;
foreach ($require as $field) {
    if (empty($_POST[$field]))  {
        $error = true;
    }
}

if (isset($_POST['submit'])) {
    if ($error) {
        echo 'insert your username and password';
    } else {
        echo "Your username is $_POST[username] and your password is $_POST[password]";
    }
}*/




?>
<form action="6.php" method="post">
    <input type="text" placeholder="username" name="username">
    <input type="password" placeholder="password" name="password">
    <input type="submit" name="submit" value="SUBMIT">
</form>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>