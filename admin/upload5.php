<!-- Header small image upload file -->
<?php 
   include '../include/connect.php';
//     if(!$db)
// {
//     die("Connection failed: " . $db->connect_error);
// }
    if (isset($_REQUEST["submit"])) {
    	
    	$file = $_FILES["file"]["name"];
    	$temp_name = $_FILES["file"]["tmp_name"];
    	$path = "../images5/".$file;

    move_uploaded_file($temp_name, $path);
    $sql = "INSERT INTO sec1img(image) VALUES ('$file')";
    header("location: ../admin/content1.php");
  
        // Execute query
        mysqli_query($db, $sql);
    }

?>


<form method="post" enctype="multipart/form-data">
	
	Image upload<input type="file" name="file">
	<input type="submit" name="submit" value="Upload Image">
</form>