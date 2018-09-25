<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		


		<?php

		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:

		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		  Step4: Make a constant and set it to the value of PHP. and use an echo to print it out

			 */

		// Step 1
        $number1 = 2;
        $number2 = 20;

        // Step 2
        echo "the sum of $number1 and $number2 is ";
        echo $number1 + $number2;
        echo '<br>';

        // Step 3
        $listOfNumbers = [ 20, 30, 40, 50, 60];
        print_r($listOfNumbers);
        echo '<br>';
        echo "The sum of array is " . array_sum($listOfNumbers);
        echo '<br>';

        // Step 4
        $assocArray = [
                'first_name' => 'Dzulfikar',
                'last_name' => 'Maulana'
        ];

        echo "My names is $assocArray[first_name] $assocArray[last_name] and i am $listOfNumbers[1] years old";



		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>