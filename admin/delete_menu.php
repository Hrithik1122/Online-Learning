<?php 

if (isset($_POST['submit'])) {

	require_once '../include/db.php';

	$deleted = delete_menu_item($_POST);

	if ($deleted) {
		header('location: menubar.php?success=Menu deleted Successfully!');
	}
	else{
		header('location: menubar.php?error=Error occured while deleting menu');
	}
}

else{
	header('location: menubar.php');
}

?>