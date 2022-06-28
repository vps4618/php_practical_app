<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  
    // step 1
    $love_number = 12;
    if($love_number<=5){
        echo "I don't like PHP.";
    }elseif($love_number<=10){
        echo 'I love PHP a little.';
    }else{
        echo 'I love PHP.';
    };
    
    echo '<br>';
    echo '<hr>';
    
    //step2
    for($number = 100;$number<=110;$number++){
        echo $number."<br>";
    };
    
    echo '<br><hr>';
    //step3
    $time=13;
   
    switch(true){
        case $time>=0 && $time<12:
            echo 'Good Morning !';
            break;
        
        case $time>=12 && $time<16:
            echo 'Good Afternoon!';
            break;
        
        case $time>=16 && $time<19:
            echo 'Good Evening!';
            break;
        
        case $time>=19 && $time<24:
            echo 'Good Night!';
            break;
        
        default:
            echo 'Invalid Time';
            break;
    };
/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>