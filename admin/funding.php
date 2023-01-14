<?php
require('../include/connect.php');
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
<style>
.button {
  background-color: #192844;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>




<h2 align="center" style="color: white; background-color:  #000099; font-family:Comic sans MS;" >Funding Agency Images Slider.</h2>
</th> 
<table style="width:100%" >
<tr>
    <th width="20%"> S. No.</th> 
    <th width="20%"> Image</th> 
    <div align="center">
    <a href="../admin/upload7.php">
      <input type="button" class="button" value="Add Image">
   </a>
 </div>
</tr>


<?php 
$lj = "SELECT * FROM `fundingimg`";
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


include '../include/connect.php';

if(isset($_POST['faculty_delete_btn'])) 
{
  $id = $_POST['delete_id'];

  $query = "DELETE FROM fundingimg WHERE id='$id' ";
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