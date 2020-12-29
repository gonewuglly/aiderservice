<?php
    $con = mysqli_connect("localhost","root","","db_test") or die("Error: " . mysqli_error($conn));
    mysqli_query($con, "SET NAMES 'utf8' "); 
?>
