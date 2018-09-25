<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

// Step 1
$number1 = 20;
$number2 = 30;

if ($number1 < $number2) {
    echo 'I love PHP';
} else if ($number1 > $number2) {
    echo 'I love ASP.NET';
} else {
    echo 'I love my wife';
}
echo '<br>';

// Step 2
for ($i = 1; $i < 11; $i++) {
    echo "$i<br>";
}

// Step 3
$number = 30;

switch ($number) {
    case $number > 50:
        echo 'Great';
        break;
    case $number < 20:
        echo 'Apa urusan anda';
        break;
    case $number = 30:
        echo 'Bukan hak anda';
        break;
    case $number < 30:
        echo 'Saya akhiri';
        break;
    default:
        echo 'Acua';
}
	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>