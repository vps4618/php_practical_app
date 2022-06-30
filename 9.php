<?php include "functions.php" ?>
<?php include "includes/header.php" ?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
    
    <?php
    //step 1
                if(isset($_GET['school'])){
        echo $_GET['school'];        
                }
    
                //step 2
                $expiration = time()+(60*60*24*7);
                setcookie('TheName','This is the value',$expiration);
                if(isset($_COOKIE['TheName'])){
                echo '<br>'.$_COOKIE['TheName'];
                }
                
                //step 3
                session_start();
                $_SESSION['message'] = 'hi brother !';
                if(isset($_SESSION['message'])){
                    echo '<br>'.$_SESSION['message'];
                }
                ?>            
		<br><a href="9.php?school=taxila+central+college">Click me</a>
	
	<?php 

	/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
	
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>