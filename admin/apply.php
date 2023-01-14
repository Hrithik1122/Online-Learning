<?php
include '../include/connect.php';

if (isset($_REQUEST["submit"])) 
{
  $content = $_REQUEST["content"];
  $sql = "INSERT INTO apply1(content) value('$content')";

        mysqli_query($db, $sql);
}
?>

<?php
include '../include/connect.php';

if (isset($_REQUEST["submit1"])) 
{
  $content3 = $_REQUEST["content3"];
  $sql = "INSERT INTO apply3(content) value('$content3')";

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

<h2 align="center" style="color: white; background-color:  #000099; font-family:Comic sans MS;" >Apply In India</h2>

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


$records = mysqli_query($db,"select * from apply1"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    
    <td><?php echo $data['content']; ?></td>
  </tr> 
<td>
  <a href="../admin/editapply.php?id=<?php echo $data['id']; ?>">Edit</a></td>
<?php
}
?>
</table>
</form>


<h2 align="center" style="color: white; background-color:  #000099; font-family:Comic sans MS;" >Header small Image</h2>
</th> 
<table style="width:100%" >
<tr>
    <th width="20%"> S. No.</th> 
    <th width="20%"> Image</th> 
    <div align="center">
    <a href="../admin/upload6.php">
      <input type="button" class="button" value="Add Image">
   </a>
 </div>
</tr>

<?php 
$lj = "SELECT * FROM `sec4img`";
$records = $db->query($lj);
while($username = $records->fetch_array())
{
?>
    <tr align="center"> 
    <td><?php echo $username['id']; ?></td> 
    <td><?php echo $username['image']; ?></td> 
    <!-- DELETE Query -->
    <td>
      <form action="#" method="POST">
      <input type="hidden" name="delete_id" value="<?php echo $username['id']; ?>">
      <button type="submit" name="faculty_delete_btn" class="btn btn-danger">Delete</button>
    </form>
    </td>
    
    <?php

if(isset($_POST['faculty_delete_btn'])) 
{
  $id = $_POST['delete_id'];

  $query_run = mysqli_query($db,"DELETE FROM sec4img WHERE id='$id'"); 

  // $query = "DELETE FROM sec4img WHERE id='$id' ";
  // $query_run = mysqli_query($query_run,$query);
  
  if ($query_run) {
    $_SESSION['success'] = "Faculty data is Deleted";
    // header("Location: #");
  }
  else{
    $_SESSION['status'] = "Faculty data is not Deleted";
    // header("Location: #");
  }
}

?>
    
  <?php
    }
  ?>
  </table>

<br><br><br>


<h2 align="center" style="color: white; background-color:  #000099; font-family:Comic sans MS;" >Apply In Abroad</h2>

<div class="container">


<form method="post">
<table>

<textarea name="content3">
  
  
</textarea>

</div>

<script src="ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.replace('content3');
</script>

<tr>
  <td colspan="2" align="center"><input type="submit" name="submit1" value="submit"></td>
</tr>
<?php


$records = mysqli_query($db,"select * from apply3"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['content']; ?></td>
  </tr> 
<td>
  <a href="../admin/editapply3.php?id=<?php echo $data['id']; ?>">Edit</a></td>
<?php
}
?>
</table>
</form>


<h2 align="center" style="color: white; background-color:  #000099; font-family:Comic sans MS;" >Header small Image 2</h2>
</th> 
<table style="width:100%" >
<tr>
    <th width="20%"> S. No.</th> 
    <th width="20%"> Image</th> 
    <div align="center">
    <a href="../admin/uploadnew.php">
      <input type="button" class="button" value="Add Image">
   </a>
 </div>
</tr>

<?php 
$lj = "SELECT * FROM `sec6img`";
$records = $db->query($lj);
while($username = $records->fetch_array())
{
?>
    <tr align="center"> 
    <td><?php echo $username['id']; ?></td> 
    <td><?php echo $username['image']; ?></td> 
    <!-- DELETE Query -->
    <td>
      <form action="#" method="POST">
      <input type="hidden" name="delete_id" value="<?php echo $username['id']; ?>">
      <button type="submit" name="faculty_delete_btn" class="btn btn-danger">Delete</button>
    </form>
    </td>
    
    <?php

if(isset($_POST['faculty_delete_btn'])) 
{
  $id = $_POST['delete_id'];

  // $query_run = mysqli_query($db,"DELETE FROM sec4img WHERE id='$id'"); 

  $query = "DELETE FROM sec6img WHERE id='$id' ";
  $query_run = mysqli_query($db,$query);
  
  if ($query_run) {
    $_SESSION['success'] = "Faculty data is Deleted";
    // header("Location: #");
  }
  else{
    $_SESSION['status'] = "Faculty data is not Deleted";
    // header("Location: #");
  }
}

?>
    
  <?php
    }
  ?>
  </table>


<?php
if(isset($_POST['logout']))
{
    session_destroy();
    header("../admin/admin.php");
}
?>
</body>
</html>