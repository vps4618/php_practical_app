<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		
	<article class="main-content col-xs-8">
	
	
	<?php  
        $value = 'Vishwa Praveen';
        $encrypted_text = crypt($value,'$2a$07$usesomesillystringforsalt$');
        echo $encrypted_text;
	/*  Step 1 -Make a variable with some text as value

		Step 2 - Use crypt() function to encrypt it

		Step 3 - Assign the crypt result to a variable

		Step 4 - echo the variable

	*/
	
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>