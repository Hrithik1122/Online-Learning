<?php
include '../include/connect.php';
if (isset($_REQUEST["submit"])) 
{
  $content = $_REQUEST["content"];
  $sql = "INSERT INTO blog(content) value('$content')";

        mysqli_query($db, $sql);
}
?>


<?php
session_start();
if(!isset($_SESSION['adminloginid']))
{
    header("location: ../admin/admin.php");
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="../style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>


<body>
   <?php include '../include/side.php'; ?>

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

$records = mysqli_query($db,"select * from blog"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    
    <td><?php echo $data['content']; ?></td>
  </tr> 
<td>
  <a href="../admin/editblog.php?id=<?php echo $data['id']; ?>">Edit</a></td>
<?php
}
?>
</table>
</form>


<?php
if(isset($_POST['logout']))
{
    session_destroy();
    header("../admin/admin.php");
}
?>
</body>
</html>