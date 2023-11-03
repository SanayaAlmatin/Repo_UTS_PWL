<?php 
 
session_start();
session_destroy();
$_SESSION['status_login_admin']==false;
header("Location: login_admin.php");
 
?>