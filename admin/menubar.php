<?php
    require_once '../include/db.php';
    display_menu();
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
  .form_wrapper{
    text-align: center;
    width: 400px;
  }
  .form_wrapper input,
  .form_wrapper select{
    padding: 10px;
    width: 100%;
    margin: 5px;
    box-sizing: border-box;
  }
</style>

<div class="form_wrapper">
  <h3>Add Menu List item</h3>
  <form action="../admin/add_menu.php" method="post">
    <input type="text" name="menu_title" placeholder="Type menu item name">
    <input type="text" name="menu_page" placeholder="Menu navigation location page (optional)">
    <select name="menu_id">
      <option value="">Select a parent menu (optional)</option>
      <?= get_parent_menus() ?>
    </select>
    <br>
    <input type="submit" name="submit" class="button" value="Add menu item">
  </form>
</div>

<div class="form_wrapper">
  <h3>Delete Menu List item.</h3>
  <form action="../admin/delete_menu.php" method="post">
    <select name="menu_id">
      <option value="">Select a menu to delete</option>
      <?= get_all_menus() ?>
    </select>
    <br>
    <input type="submit" name="submit" class="button" value="Delete menu item">
  </form>
</div>




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




<?php
if(isset($_POST['logout']))
{
    session_destroy();
    header("../admin/admin.php");
}
?>
</body>
</html>