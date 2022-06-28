<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 
    
    //step1
    function calculation(){
        $number1 = 56;
        $number2 = 23;
        $sum = $number1+$number2;
        return $sum;
    }
    
    $value = calculation();echo $value.'<br>';
    
    //step2
    function hola($hello){
        echo $hello;
    }
    hola('Hey is that spanish  ?');
    
/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values
 */

	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php" ?>