<?php
include('../include/connect.php');

if(isset($_POST['submit_it'])){
  $username = $_POST["myusername"];
  $password = $_POST["mypassword"];
    
  $sql = "SELECT email,password FROM `admin`";
  $result = $db->query($sql);
  $array = $result->fetch_array();
  

  if($username==$array['email']&&$password==$array['password'])
  {
    session_start();
    $_SESSION['adminloginid']=$_POST['myusername'];
    header("location:../admin/adminpanel.php");
  }
  else
  {
    header("location:incorrectadmin.php");
  }
  
};
$db->close();

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Right To MBBS-Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'><link rel="stylesheet" href="../admin.css">

</head>
<body>
<!-- partial:index.partial.html -->
<body id="particles-js"></body>
<div class="animated bounceInDown">
  <div class="container">
    <span class="error animated tada" id="msg"></span>
    <form name="form1" class="box" onsubmit="return checkStuff()" action="admin.php" method="POST">
      <h4>Admin<span>Dashboard</span></h4>
      <h5>Sign in to your account.</h5>
        <input type="text" name="myusername" value="" placeholder="Enter a username" autocomplete="off" required />
        <i id="eye"></i>
       <input type="password" name="mypassword" value="" placeholder="Enter a password" autocomplete="off" required />

        <input type="submit" value="Login" class="btn1" name="submit_it">
      </form>
      <!--   <a href="#" class="dnthave">Don’t have an account? Sign up</a> -->
  </div> 
       <div class="footer">
      <!-- <span>Made with <i class="fa fa-heart pulse"></i> <a href="https://www.google.de/maps/place/Augsburger+Puppenkiste/@48.360357,10.903245,17z/data=!3m1!4b1!4m2!3m1!1s0x479e98006610a511:0x73ac6b9f80c4048f"><a href="https://codepen.io/lordgamer2354"></a></span> -->
    </div>
</div>
<!-- partial -->
  <script src='https://cldup.com/S6Ptkwu_qA.js'></script><script  src="../admin.js"></script>

</body>
</html>
