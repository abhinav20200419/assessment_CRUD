<?php
$user=0;//no user in the database
$success=0;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'config.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    $roles=$_POST['roles'];

    $stmt=$conn->prepare("SELECT * FROM users WHERE username=?");
    $stmt->bind_param('s',$username);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    if(count($result)>0)
    {
        $user=1;
        //echo 'user already present';
        $stmt->close();
        
    }else{
        $sql = "insert into users(username,password_hash,roles) VALUES(?,?,?) ";
        $stmt=$conn->prepare($sql);
        $stmt->bind_param('sss',$username,$password,$roles);
        $stmt->execute();
        $success=1;
        //echo 'user inserted successfully';
        $stmt->close();
    }
    
    


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

    <title>Hello, world!</title>
  </head>
  <body>    

  <?php
    if($user)
    {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Oh No!</strong> 
        User already exists.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
    if($success)
    {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Congratulations! </strong> 
        SignUp Successful
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
  ?>
    <h1 class="text-center mt-4 m-4">SignUp Page</h1>
    <div class="container">
    <form action="signup3.php" method="post">
  <div class="form-group">
    <label >Username</label>
    <input type="name" class="form-control" 
    placeholder="Enter your username" name="username">
    
</div>
  <div class="form-group">
    <label >Password</label>
    <input type="password" class="form-control" 
    placeholder="Enter your password" name="password">
  </div>
  <div class="form-group">
    <label >Role</label>
    <input type="text" class="form-control" 
    placeholder="Enter your role" name="roles">
  </div>
  
  
  <button  type="submit" class="btn btn-primary w-100">Submit</button>
    <a href="login3.php" class="mt-5">Already a user? Login</a>
</form>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>