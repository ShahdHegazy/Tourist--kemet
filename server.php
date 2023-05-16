


<?php 	
	
    if(isset($_POST['submit']) and $_POST['submit'] == 'login now')	
    {
    include 'connection.php';
    $Useremail=$_POST['Useremail'];
    $Password=$_POST['Password'];
    
    $query="SELECT * FROM `user` WHERE `user_email`='$Useremail' and `user_password`='$Password'";
    $sql=mysqli_query($con,$query);
    if($sql->num_rows>0)
    {
    session_start();
    $_SESSION['Useremail']= $Useremail;
    
    ?>
    <script type="text/javascript">
    alert("Logged in successfully");
    
    </script>
     <?php 
    header("location:index.php");
     }
     else
     {
     ?>
    
    <script type="text/javascript">
    alert("the username and password not found try agin");
    
    </script>
    
    <?php
    }
    
    }?>
    
        
      </article>
    
    </div>
   