<?php
include '../include/connect.php';

if (isset($_REQUEST["submit"])) 
{
  $content = $_REQUEST["content1"];
  $sql = "INSERT INTO content1(content) value('$content')";

        mysqli_query($db, $sql);
}
?>


<?php
include '../include/connect.php';

if (isset($_REQUEST["submit3"])) 
{
  $content = $_REQUEST["content3"];
  $sql = "INSERT INTO content3(content) value('$content')";

        mysqli_query($db, $sql);
}
?>


<?php
include '../include/connect.php';

if (isset($_REQUEST["submit2"])) 
{
  $content = $_REQUEST["content2"];
  $sql = "INSERT INTO content2(content) value('$content')";

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

<h2 align="center" style="color: white; background-color:  #000099; font-family:Comic sans MS;" >Heading</h2>

<div class="container">


<form method="post">
<table>

<textarea name="content1">
  
  
</textarea>

</div>

<script src="ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.replace('content1');
</script>

<tr>
  <td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
</tr>
<?php

$records = mysqli_query($db,"select * from content1"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    
    <td><?php echo $data['content']; ?></td>
  </tr> 
<td>
  <a href="../admin/editcontent1.php?id=<?php echo $data['id']; ?>">Edit</a></td>
<?php
}
?>
</table>
</form>



<br><br><br><br>
<h2 align="center" style="color: white; background-color:  #000099; font-family:Comic sans MS;" >Paragraph of header</h2>

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
  <td colspan="2" align="center"><input type="submit" name="submit3" value="submit"></td>
</tr>
<?php

$records = mysqli_query($db,"select * from content3"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    
    <td><?php echo $data['content']; ?></td>
  </tr> 
<td>
  <a href="../admin/editcontent3.php?id=<?php echo $data['id']; ?>">Edit</a></td>
<?php
}
?>
</table>
</form>


<br><br><br><br>
<h2 align="center" style="color: white; background-color:  #000099; font-family:Comic sans MS;" >Last Content</h2>

<div class="container">


<form method="post">
<table>

<textarea name="content2">
  
  
</textarea>

</div>

<script src="ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.replace('content2');
</script>

<tr>
  <td colspan="2" align="center"><input type="submit" name="submit2" value="submit"></td>
</tr>
<?php

$records = mysqli_query($db,"select * from content2"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    
    <td><?php echo $data['content']; ?></td>
  </tr> 
<td>
  <a href="../admin/editcontent2.php?id=<?php echo $data['id']; ?>">Edit</a></td>
<?php
}
?>
</table>
</form>

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
<!-- For Header big image -->

<h2 align="center" style="color: white; background-color:  #000099; font-family:Comic sans MS;" >Banner image</h2>
</th> 
<table style="width:100%" >
<tr>
    <th width="20%"> S. No.</th> 
    <th width="20%"> Image</th> 
    <div align="center">
    <a href="upload5.php">
      <input type="button" class="button" value="Add Image">
   </a>
 </div>
</tr>

<?php 
$lj = "SELECT * FROM `sec1img`";
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

  $query = "DELETE FROM sec1img WHERE id='$id' ";
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
<br><br><br>



<?php
if(isset($_POST['logout']))
{
    session_destroy();
    header("../admin/admin.php");
}
?>
</body>
</html>