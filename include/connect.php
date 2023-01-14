<?php 
    $db= new mysqli("SERVER_NAME", "USERNAME", "PASSWORD", "DATABASE");
    if(!$db)
{
    die("Connection failed: " . $db->connect_error);
}

?>