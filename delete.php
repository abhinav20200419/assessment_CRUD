<?php
session_start();
include 'config.php';
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $stmt=$conn->prepare("DELETE FROM phones where id=?");
    $stmt->bind_param('i',$_GET['deleteid']);
    $stmt->execute();
    header('location:home.php');

    $name=$_GET['name'];
    $class=$_GET['class'];
    $password=$_GET['password'];
    $mobile=$_GET['mobile'];

}

?>