<?php include("header.php");?>






    <br>
	<br>

    <section class="contact " id="contact ">

      
        <h1 class="heading ">
    <span>L</span>
    <span>O</span>
    <span>G</span>
    <span>I</span>
    <span>N</span>
   
</h1>

        <div class="row ">

            <div class="image "> 
               <img src="images/signup.png " alt="sign up "> 
             </div> 
          
             <form method="post" action=" " >

<h1>LOGIN</h1>


<div class="inputBox "> 
<input type="text" class="box" name="user_name" placeholder="enter your name">
        
<input type="password" class="box" name="Password" placeholder="enter your password">
    </div>
 <input type="submit" name="submit" value="login now" class="btn">  <br> <br>


 <input type="checkbox" id="remember">
            <label for="remember">remember me</label> <br>
            <p>forget password? <a href="#">click here</a></p> <br>
            <p>don't have and account? <a href="signup.php">register now</a></p>


</form>

        </div>

    </section>

    <!--  section ends -->
    <?php 	
	
    if(isset($_POST['submit']) and $_POST['submit'] == 'login now')	
    {
    include 'connection.php';
    $user_name=$_POST['user_name'];
    $Password=$_POST['Password'];
    
    $query="SELECT * FROM `user` WHERE `user_name`='$user_name' and `user_password`='$Password'";
    $sql=mysqli_query($con,$query);
    if($sql->num_rows>0)
    {
    session_start();
    $_SESSION['user_name']= $user_name;
    
    ?>
    <script type="text/javascript">
    alert("Logged in successfully");
    
    </script>
     <?php 
    header("location:Event.php");
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



    <?php include("footer.php");?>
   