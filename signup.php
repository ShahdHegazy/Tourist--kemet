<?php include("header.php");?>






    <br>
	<br>

    <section class="contact " id="contact ">

      
        <h1 class="heading ">
    <span>S</span>
    <span>i</span>
    <span>g</span>
    <span>n</span>
    <span>u</span>
    <span>p</span>
</h1>

        <div class="row ">

            <div class="image "> 
               <img src="images/signup.png " alt="sign up "> 
             </div> 
          
            <form method="post" action=" "enctype="multipart/form-data" >

            <h1>Sign up</h1>
            

            <div class="inputBox "> 
            <input type="email " name="user_email"  placeholder="email " required>
                    <input type="text" name="user_name" placeholder=" name " required>
                    <input type="password" name="user_password" placeholder=" Password "required>
                </div>
                <div class="inputBox ">
                    <input type="text" name="user_number" placeholder="number ">
                    <input type="text" name="user_address" placeholder="address ">
                </div>
             
                <input type="submit" name="submit" class="btn " value="Sign up">
            </form>

        </div>

    </section>

    <!-- contact section ends -->

    <?php 	
if(@$_POST['submit'] and $_POST['submit']=='Sign up' )
{
include("connection.php");
$user_email=$_POST['user_email'];
$user_name=$_POST['user_name'];
$user_password=$_POST['user_password'];
$user_number=$_POST['user_number'];
$user_address=$_POST['user_address'];


$query="SELECT * FROM `user` WHERE `user_email` ='$user_email' or user_name='$user_name'";
$sql=mysqli_query($con,$query);

$row=mysqli_fetch_array($sql);
if($row>0){
?>
<script type="text/javascript">
alert("Email or username already exists");

</script>
<?php
}
 else{
$sql1="INSERT INTO `user` (`user_email`, `user_name`, `user_password`, `user_number`, `user_address`) 
VALUES ('$user_email', '$user_name', '$user_password', '$user_number', '$user_address');";
mysqli_query($con,$sql1)
?>
<script type="text/javascript">
alert("Membership has been successfully registered");

</script>
<?php
}
}?>
	
	
  </article>

</div>
<?php include("footer.php");?>