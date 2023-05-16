<?php  
session_start();

if(isset($_SESSION['user_name']))
include("header.php") ;
else
header("location:index.php");	
?>




<br>
<br>
<br>
     <section class="gallery " id="gallery ">

<h1 class="heading ">
    <span>E</span>
    <span>V</span>
    <span>E</span>
    <span>N</span>
    <span>T</span>
    
</h1>
</section>




<?php

    include("connection.php");
                
                $query="SELECT * FROM `event`";
                $sql=mysqli_query($con,$query); 
                if(mysqli_num_rows($sql)>0)
                {
                    while($row=mysqli_fetch_array($sql))
                    {  
                ?>

           
            <!-- NEEEEEW -->
            <section class="gallery " id="gallery ">
            <div class="box-container ">
            <div class="box ">
    <img src="admin/<?php echo  $row['Photo'];?>" alt=" ">
        <div class="content ">
        <h3><?php echo  $row['Event_Name'];?></h3>
        <form method="post" action="">
	   
	  
	   <input type="hidden" name="Event_ID" value="<?php echo  $row['Event_ID'];?>">
	    <input type="submit" class="btn " name="submit" value="Booking">
	   </form>
        </div>
                    </div>
                    </div> </section>

            <!-- enddddd -->
            
            <?php }}?>
                    </div>
 
                    <?php 	
	
    if(isset($_POST['submit']) and $_POST['submit'] == 'Booking')	
    {
    include 'connection.php';
    
    echo $Event_ID=$_POST['Event_ID'];
    echo $user_name=$_SESSION['user_name'];
    
    $query="INSERT INTO `booking` (`user_name`, `Event_ID`, `status`) VALUES ( '$user_name', $Event_ID, 'Booking');";
    
    if(mysqli_query($con,$query))
    {
    ?>
    <script type="text/javascript">
    alert("added successfully");
    
    </script>
    <?php	
    
    }
    else
    {
    ?>
    
    <script type="text/javascript">
    alert("No");
    
    </script>
    
    <?php
    }
    }
    ?>
                           

 <?php include("footer.php");?>

                    

    

    