<?php
$login=0;//user in the database and have logged in
$invalid_user=0; //user not found in the database
$invalid_password=0; //invalid password
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'config.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

    
    $sql_password = "Select * from registration where username='$username' and password='$password'";
    $result=mysqli_query($conn,$sql_password);
    if(!$result)
    {

    }
    else{
        $num=mysqli_num_rows($result);
        if($num>0)
        {
            //echo "login successful";
            $login=1;
            session_start();
            $_SESSION['username']=$username;
            header('location:home.php');
            //echo "\n user already exist";
        }else{
            $sql_user = "Select * from registration where username='$username'";
            $result1 = mysqli_query($conn, $sql_user);
            if(mysqli_num_rows($result1)>0)
            {
                $invalid_password=1;
            }
            else{
                $invalid_user=1;
            }
            //echo "Invalid data";
        }
    }
    /*
    
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

    <title>Login Page</title>
  </head>
  <body>    

  <?php
    if($invalid_user)
    {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Oh No!</strong> 
        No User found in the database. SignUp first to login to the page.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
    if($invalid_password)
    {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Oh No!</strong> 
        You have entered wrong password.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
    if($login)
    {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Welcome! </strong> 
        '.$username.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
  ?>
    <h1 class="text-center mt-4 m-4">Login Page</h1>
    <div class="container">
    <form action="login.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="name" class="form-control" 
    placeholder="Enter your username" name="username">
    
</div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" 
    placeholder="Enter your password" name="password">
  </div>
  
    <button  type="submit" class="btn btn-primary w-100">Login</button>
    <a href="signup.php" class="mt-4 align-items-right">Not a user? signup</a>
</form>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>