<?php
include 'connect.php';

if (isset($_REQUEST["submit"])) 
{
  $content = $_REQUEST["content"];
  $sql = "INSERT INTO success_stories(content) value('$content')";

        mysqli_query($db, $sql);
}
?>


<?php
session_start();
if(!isset($_SESSION['adminloginid']))
{
    header("location: admin.php");
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>


<body>
    <form method="post">
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">CodingLab</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="adminpanel.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="menubar.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Menu-Bar</span>
          </a>
        </li>
        <li>
          <a href="about_us.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">About Us</span>
          </a>
        </li>
        <li>
          <a href="services_us.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Services</span>
          </a>
        </li>
        <li>
          <a href="study_in_usa.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Study in USA</span>
          </a>
        </li>
        <li>
          <a href="partners.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Partners</span>
          </a>
        </li>
        <li>
          <a href="success.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Success Stories</span>
          </a>
        </li>
        <li>
          <a href="event.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Events</span>
          </a>
        </li>
        <li>
          <a href="blogs.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Blogs</span>
          </a>
        </li>
        <li>
          <a href="contactus.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Contact Us</span>
          </a>
        </li>
        <li>
          <a href="headerimg.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Header Image</span>
          </a>
        </li>
        <li>
          <a href="content1.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Content 1</span>
          </a>
        </li>
        <li>
          <a href="collapsible.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Collapsible</span>
          </a>
        </li>
        <li>
          <a href="apply.php">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">How to Apply</span>
          </a>
        </li>
        <li>
          <a href="funding.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Carousel Slider</span>
          </a>
        </li>
        <li>
          <a href="faq.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">FAQ</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Favrorites</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <form method="post">
        <li class="log_out">
          <a href="">
            <i class='bx bx-log-out'></i>
            <span class="links_name"></span>
            <button name="logout">Log Out</button>

          </a>
          </form>
        </li>
      </ul>
  </div>
</form>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">Hrithik Bansal</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

<br><br><br>



  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

<h2 align="center" style="color: white; background-color:  #000099; font-family:Comic sans MS;" >Success Stories</h2>

<div class="container">


<form method="post">
<table>

<textarea name="content">
  
  
</textarea>

</div>

<script src="ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.replace('content');
</script>

<tr>
  <td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
</tr>
<?php

include "connect.php"; // Using database connection file here

$records = mysqli_query($db,"select * from success_stories"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    
    <td><?php echo $data['content']; ?></td>
  </tr> 
<td>
  <a href="editsuccess.php?id=<?php echo $data['id']; ?>">Edit</a></td>
<?php
}
?>
</table>
</form>


<?php
if(isset($_POST['logout']))
{
    session_destroy();
    header("admin.php");
}
?>
</body>
</html>