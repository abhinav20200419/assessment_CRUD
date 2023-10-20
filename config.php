<?php 
$conn = mysqli_connect("localhost", "root", "", "signupforms");

if(!$conn)
{
    die(mysqli_error($conn));
    
}
    
?>