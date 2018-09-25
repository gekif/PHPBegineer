
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

if(isset($_POST['submit'])) {
    echo "Your Username is $_POST[username] and your password is $_POST[password]";
}

?>
<form action="6.php" method="post">
    <input type="text" placeholder="username" name="username">
    <input type="password" placeholder="password" name="password">
    <input type="submit" name="submit" value="SUBMIT">
</form>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>