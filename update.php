<?php
session_start();
include 'config.php';

$id=$_GET['updateid'];
$stmt=$conn->prepare("SELECT * FROM phones WHERE id=?");
$stmt->bind_param('i',$id);
$stmt->execute();
$result=$stmt->get_result()->fetch_all(MYSQLI_ASSOC);
$name=$result[0]['name'];
$brand=$result[0]['brand'];
$ram=$result[0]['ram'];
$storage=$result[0]['storage'];
$camera=$result[0]['camera'];
$battery=$result[0]['battery'];
$price=$result[0]['price'];

if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $brand=$_POST['brand'];
  $ram=$_POST['ram'];
  $storage=$_POST['storage'];
  $camera=$_POST['camera'];
  $battery=$_POST['battery'];
  $price=$_POST['price'];
  
  $stmt=$conn->prepare("UPDATE phones SET name=?,brand=?,ram=?,
  storage=?,camera=?,battery=?,price=? WHERE id=?");
  $stmt->bind_param('ssssssii',$name,$brand,$ram,$storage,$camera,$battery,$price,$_GET['updateid']);
  $stmt->execute();
  if (!$stmt) {
    die('Error: ' . $conn->error);
}
  $stmt->close();
    header('location:home.php');
  /*
  
  $sql="insert into crud (name,class,subject,fees,feesdeposited,school
  ,mobile,doj,batch) values('$name','$class','$subject',
  '$fees','$feesdeposited','$school','$mobile','$doj','$batch')";

  $result=mysqli_query($conn,$sql);
  if($result)
  {
    if($_SESSION['username']=="ashu")
    {
      header('location:drashu.php');
    }
    elseif($_SESSION['username']=="monika")
    {
      header('location:home.php');
    }
    //header('location:display.php');
    //echo "Data entered Sucessfully";
  }
  else {
    die(mysqli_error($conn));
  }

  */

}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>COMPARISTA</title>
  </head>
  <body>
    <h1 class="my-5 text-center">Enter Mobile Details</h1>
      <div class="container">
        <form method="post">
        
        
        <div class="form-group">
            <label >Model Name</label>
            <input type="text" class="form-control" value="<?php echo $name;?>"
            placeholder="Enter the model name" name="name"autocomplete="off">
        </div>
        
        <div class="form-group">
            <label for="batchdropdown">Brand</label>
            <select class="form-control" id="batchdropdown" value="<?php echo $brand;?>"
            placeholder="Select Brand" name="brand">
            <option>OPPO</option>
            <option>VIVO</option>
            <option>MI</option>
            <option>ONEPLUS</option>
            <option>SAMSUNG</option>
            <option>GOOGLE</option>
            <option>MOTOROLLA</option>
            <option>REALME</option>
            <option>IPHONE</option>
            <option>POCO</option>
            <option>ASUS</option>
            </select>
        </div>
        <div class="form-group">
            <label for="batchdropdown">RAM</label>
            <select class="form-control" id="batchdropdown" value="<?php echo $ram;?>"
            placeholder="Enter RAM" name="ram">
            <option>4GB</option>
            <option>6GB</option>
            <option>8GB</option>
            <option>12GB</option>
            </select>
        </div>
        <div class="form-group">
            <label for="batchdropdown">Storage</label>
            <select class="form-control" id="batchdropdown" value="<?php echo $storage;?>"
            placeholder="Enter Storage" name="storage">
            <option>64GB</option>
            <option>128GB</option>
            <option>256GB</option>
            <option>512GB</option>
            </select>
        </div>
        <div class="form-group">
            <label >Camera</label>
            <input type="text" class="form-control" value="<?php echo $camera;?>"
            placeholder="Enter School name" name="camera" autocomplete="off">
        </div>
        <div class="form-group">
            <label >Battery</label>
            <input type="text" class="form-control" value="<?php echo $battery;?>"
            placeholder="Enter your name" name="battery" autocomplete="off">
        </div>
        <div class="form-group">
            <label >Price</label>
            <input type="text" class="form-control" value="<?php echo $price;?>"
            placeholder="Enter price" name="price" autocomplete="off">
        </div>
        
        
        
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>