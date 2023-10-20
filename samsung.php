<?php
  include 'config.php';
  ?>
  <?php
  session_start();
  /*
  if(!isset($_SESSION['username']))
  {
      header('location:login.php');
  }
  */
  ?>


  <!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

      <title>comparista</title>
      <script src="https://cdn.tailwindcss.com"></script>
  </head>
    <body>    
    <?php
      include 'header.php';
    ?>



      <div class="container">
          <a href="logout.php" class="btn btn-primary mt-5 ">Logout</a><br>
          <button class="btn btn-primary my-4 "><a href="addPhone.php" class="text-white">Add Phone</a></button>
    
        </div>
    </div>

    <h1 class="container my-4 font-weight-bold text-3xl">Samsung Models</h1>
    
    <div class="container overflow-x-auto  bg-light p-10 mb-10">
      
    
    <table class="table">
    <thead>
      <tr>
        <th scope="col">S.No.</th>
        <th scope="col">Name</th>
        <th scope="col">Brand</th>
        <th scope="col">RAM</th>
        <th scope="col">Storage</th>
        <th scope="col">Camera</th>
        <th scope="col">Battery</th>
        <th scope="col">Price</th>
        <th scope="col">Operations</th>
      </tr>
    </thead>
  <?php
    $stmt=$conn->prepare("SELECT * FROM phones WHERE brand='SAMSUNG'");
    $stmt->execute();
    $result=$stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    for($i=0;$i<count($result);$i++)
    {
        $id = $result[$i]['id'];
        $name = $result[$i]['name'];
        $brand = $result[$i]['brand'];
        $ram = $result[$i]['ram'];
        $storage = $result[$i]['storage'];
        $camera = $result[$i]['camera'];
        $battery = $result[$i]['battery'];
        $price = $result[$i]['price'];
        echo '<tr>
              <th scope="row">'.$id.'</th>
              <td>'.$name.'</td>
              <td>'.$brand.'</td>
              <td>'.$ram.'</td>
              <td>'.$storage.'</td>
              <td>'.$camera.'</td>
              <td>'.$battery.'</td>
              <td>'.$price.'</td>
              <td>
              <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-white">Update</a></button>
              <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-white">Delete</a></button>
              </td>
            </tr>';

    }
  ?>
    
    
  </table>
  </div>
    
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
  </html>