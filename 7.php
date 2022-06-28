<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php 
        
        $connection = mysqli_connect('localhost','root','','advanced_level_classes');

        if(!$connection){

        die("Database connection failed !");
        }    
        $query = "SELECT * FROM class_fees_provided";
        
        $result = mysqli_query($connection,$query);
        if(!$result){
                        
                        die("Coudn't display items".mysqli_error($connection));
                    }else{
          
                       
?>
 <table class="table">
       <thead class="thead-dark">
        <tr>
            <th>id</th>
            <th>name_of_teacher</th>
            <th >fees</th>
            <th>month</th>
        
        </tr>
     </thead>
    <tbody>
       
        <?php
while(/*$row = mysqli_fetch_row($result)*/$row=mysqli_fetch_assoc($result)){

    
    $id=$row['id'];
    $name_of_teacher = $row['name_of_teacher'];
    $fees = $row['fees'];
    $month = $row['month'];    
    
    echo "<tr><td>$id</td><td>$name_of_teacher</td><td>$fees</td><td>$month</td></tr>";    
 


}          
          ?>
           
</tbody>
</table>
         
          <?php
        }

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/
	
?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>