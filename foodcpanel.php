<?php  
session_start();

if(isset($_SESSION['customer_username']))
include("header1.php") ;
else
header("location:index.php");	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login or Register</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/stylee.css">
</head>
<body>
	<!-- <header>
		<div class="logo">
			<img src="cs/Picture2.png">
		</div>
		<div class="restua">RE$TUA</div>
		<nav class="navigation">
			<ul>
			  <li> <a href="index.php">HOME</a></li> 
			  <li><a href="menu.php">MENU</a></li> 
			  <li><a href="#">CONTACT</a></li> 
			  <li><a href="login.php">LOGIN</a></li>
			  <li><a href="#">FEEDBACK</a></li>
			</ul>         
		</nav>
	</header> -->
  <body> 
  
    <div class="main">
      <div class="section-title">
          <h2>OUR MENU</h2>
      </div>
      <div class="menus">
          <div class="menu-column">
              <!-- <h4>breakfast</h4> -->
              <?php
                                    
                    include("connection.php");

                    $query="SELECT * FROM `food` ";
                    $sql=mysqli_query($con,$query); 
                    if(mysqli_num_rows($sql)>0)
                    {


                    while($row=mysqli_fetch_array($sql))
                    { 
                    ?>
                    <div class="single-menu">
                        <img src="admin/<?php echo  $row['photo'];?>" alt="">
                        <div class="menu-content">
                            <h5><?php echo  $row['food_name'];?><span>$<?php echo  $row['food_price'];?></span></h5>
                            <p><?php echo  $row['food_discribtion'];?></p>


                            <form action="" method="post">
                            <input type="hidden" name="food_id" value="<?php echo  $row['food_id'];?>">
                            <input class="submit-form" type="submit" name="submit" value="Booking">
                    </form>

                        </div>
                        <br>   
                    </div>
                    <?php
                    }
                    }?>
                     </div>

<?php
if(isset($_POST['submit']) and $_POST['submit'] == 'Booking')	
{
include 'connection.php';

$food_id=$_POST['food_id'];
$customer_username=$_SESSION['customer_username'];


$query="INSERT INTO `booking`( `food_id`, `customer_username`, `status`) VALUES ('$food_id','$customer_username','Booking');";

if(mysqli_query($con,$query))
{
?>
<script type="text/javascript">
alert("booking in successfully");

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
	

</div>
</body>