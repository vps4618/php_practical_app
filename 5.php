<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 
//step 1
echo rand(1,1000).'<br>';
    
    //step 2
    $string  = 'Vpsoftwares';
    echo strlen($string).'<br>';
    
    //step 3
    
    $values = [1234,'Vishwa',$string];
    
    $found = in_array(12,$values);
    
    if($found){
        echo 'wow we did it together !';
    }else{
        echo 'we messed up,we could not find it.';
    }
    
    
    
    
    
/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>