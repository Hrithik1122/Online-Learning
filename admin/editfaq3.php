<?php
session_start();
if(!isset($_SESSION['adminloginid']))
{
    header("location: admin.php");
}

?>
<?php

include "connect.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"select * from faq3 where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['submit'])) // when click on Update button
{
    $content = $_POST['content'];
    // $address = $_POST['address'];
    
    $edit = mysqli_query($db,"update faq3 set content='$content' where id='$id'");
    
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:faq.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }       
}
?>

<h2>Update Data.</h2>

<form method="POST">
  <input type="text" name="id" value="<?php echo $data['id'] ?>" placeholder="Enter Full Name" Required>
  <textarea name="content"> 
  
  <?php echo $data['content'] ?>
  </textarea>
  <script src="ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.replace('content');
</script>
  <input type="submit" name="submit" value="Update">
</form>

<?php
if(isset($_POST['logout']))
{
    session_destroy();
    header("admin.php");
}
?>