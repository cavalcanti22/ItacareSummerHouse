<?php 
session_start();
if( !isset( $_SESSION['email'] ) ){
	header("location: login.php");
}

session_destroy();
$_SESSION = array();
header( 'Location:index.php' );

?>
