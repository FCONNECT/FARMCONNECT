<?php 
session_start();



unset($_SESSION['User']);
unset($_SESSION['user_id']);

header("Location: login.php");



 ?>