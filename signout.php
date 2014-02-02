<?php 

if($_GET['action']=="logout"){
	unset($_SESSION['drugstore']);
        unset($_SESSION['doctor']);
        unset($_SESSION['patient']);
}
?>