<?php include('server.php')?>
<?php include('errors.php') ?>
<?php
	
	session_destroy();			

    #$a = $_SESSION['email'];
    
    #$sql = " CALL `logout`('$a');";
    #$result = mysqli_query($mysqli, $sql);
    header('location:signin.php');
    #require 'signin.php';
    
?>
