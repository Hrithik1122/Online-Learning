<?php
function connect(){
	$connection = mysqli_connect("SERVER_NAME", "USERNAME", "PASSWORD", "DATABASE");
	if(!$connection) {
		die('Failed to connect with database');
	}
	return $connection;
}

function debug($arg){
	echo '<pre>';
	print_r($arg);
	echo '</pre>';
	exit;  
}

function get_menus(){
	$connection = connect();
	$sql = "SELECT * FROM `menus`";
	$result = mysqli_query($connection , $sql);

	if(mysqli_num_rows($result) ){
		$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
		$menus = [];

		foreach ($rows as $index => $row) {
			if($row['menu_id']){
				$id = $row['menu_id'];

				$menus['menu_'.$id]['submenu'][] = [
					'id' => $row['id'],
					'title' => $row['title'],
					'page' => $row['page'], 
				];

			}

			else{
				$id = $row['id'];

				$menus['menu_'.$id]= [
					'id' => $row['id'],
					'title' => $row['title'],
					'page' => $row['page'], 
				];
			}
		}


	
	 	// echo "data exist";
	 }
	// else{
	// 	echo "data does not exist";
	// } 
	 return $menus;
}

function display_menu(){
	$menus = get_menus();
	// debug($menus);

	if(!$menus){
		return "No menus in db";
	}

	$html = '';
	$html .= '<ul class="navbar-nav">';

	foreach ($menus AS $menu) {

		if(isset($menu['submenu'])) {
			if ($menu['page']) {
			$html .= '<li class="nav-item dropdown">
            <a class="nav-link  dropdown-toggle" data-bs-toggle="dropdown" href="'.$menu['page'].'">'.$menu['title'].'</a>';
			}
			else{
				$html .= '<li class="nav-item dropdown">
            <a class="nav-link  dropdown-toggle" data-bs-toggle="dropdown" href="#">'.$menu['title'].'</a>';
			}

			if(is_array($menu['submenu'])) {
				$html .= '<ul class="dropdown-menu">';

				foreach ($menu['submenu'] AS $submenu) {

				if ($submenu['page']) {
					$html .= '<li><a class="dropdown-item" href="'.$submenu['page'].'">'.$submenu['title'].'</a> </li>';
			}
			else{
				$html .= '<li><a class="dropdown-item" href="#">'.$submenu['title'].'</a> </li>';
			}

				}

				$html .= '</ul>';
			}

			$html .= '</li>';
		}

		else{
			if ($menu['page']) {
			$html .= '<li class="nav-item active"> <a class="nav-link" href="'.$menu['page'].'">'.$menu['title'].'</a> </li>';
			}
			else{
				$html .= '<li class="nav-item active"> <a class="nav-link" href="#">'.$menu['title'].'</a> </li>';
			}

		}

	}
	$html .= '</ul>'; 
	return $html;

}


function get_parent_menus(){
	$connection = connect(); 
	$sql = "SELECT * FROM `menus` WHERE `menu_id` IS NULL";

	$result = mysqli_query($connection, $sql);

	if(mysqli_num_rows($result)){
		$menu = '';
		while ($row = mysqli_fetch_assoc($result)) {
			$menu .= '<option value="'.$row['id'].'">'.$row['title'].'</option>';
		}

		return $menu;
	}
}

function add_new_menu_item($menu){

	$connection = connect(); 

	$title = $menu['menu_title'];
	$page  = $menu['menu_page']; 
	$id    = $menu['menu_id'];
	$sql   = '';

	if(!empty($title) AND !empty($page) AND !empty($id)) {
		$sql = "INSERT INTO `menus`(`title`, `menu_id`, `page`) VALUES ('$title', '$id', '$page')";
	}

	else if(!empty($title) AND !empty($page) AND empty($id)) {
		$sql = "INSERT INTO `menus`(`title`, `page`) VALUES ('$title', '$page')";
		
	}

	else if (!empty($title) AND empty($page) AND !empty($id)) {
		$sql = "INSERT INTO `menus`(`title`, `menu_id`) VALUES ('$title', '$id')";
		
	}

	else if (!empty($title) AND empty($page) AND empty($id)) {
		$sql = "INSERT INTO `menus`(`title`) VALUES ('$title')";
		
	}

	mysqli_query($connection, $sql);

	if(mysqli_affected_rows($connection)){
		return true;
	}

	return false;
}


function get_all_menus(){
	$connection = connect(); 
	$sql = "SELECT * FROM `menus`";

	$result = mysqli_query($connection, $sql);

	if(mysqli_num_rows($result)){
		$menu = '';
		while ($row = mysqli_fetch_assoc($result)) {
			$menu .= '<option value="'.$row['id'].'">'.$row['title'].'</option>';
		}

		return $menu;
	}
}

function delete_menu_item($menu){
	$connection = connect();
	$id = $menu['menu_id'];
	$sql = "DELETE FROM `menus` WHERE `id`= $id";

	mysqli_query ($connection, $sql);

	if(mysqli_affected_rows($connection)){
		return true;
	}

	return false;

}
