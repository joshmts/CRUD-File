<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){
require('connection.php'); 

$email = $_POST['email'];  
$password = $_POST['password'];  
  
    //to prevent from mysqli injection  
    $email = stripcslashes($email);  
    $password = stripcslashes($password);  
    $email = mysqli_real_escape_string($con, $email);  
    $password = mysqli_real_escape_string($con, $password);  
  
    $sql = "select * from tbl_employee where email = '$email' and password = '$password'";  
    $result = mysqli_query($con, $sql);  
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
      
    if($count == 1){
        session_start();
        session_regenerate_id();
        $_SESSION["user_id"] = $user["emp_id"];
        echo '<script>alert("Successfully Login!");
            window.location.href = "accountlogin.php";exit();</script>';
        }
        else{
        echo '<script>alert("Invalid Login");exit;</script>'; 
      }
}   
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/style.php">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/boxicons.min.css">
  </head>
  <body>
    <style>
      body {
        background-image:url('img/face.jpg');
      }
      </style>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
  
              <li class="nav-item">
                <a class="nav-link" href="employee-create.php">Create Employee</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>

    <div class="center">
      <h1>Login Form</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" id="email" name="email" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input id="password" name="password" type="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" value="Login">
        <div class="signup_link">
            <div class="row gy-5">
                 <div class="col-md-4">
                    <div class="social-icons">
                     
                      <a href="#"><i class="bx bxl-facebook"></i></a>
                       <a href="#"><i class="bx bxl-twitter"></i></a>
                       <a href="#"><i class="bx bxl-instagram"></i></a>
                       <a href="#"><i class="bx bxl-github"></i></a>
                    
                    </div>
                 </div>
              </div>
    </div>
    </form>
  </div>
</body>
  
  <footer>
        <div class="footer-top">
           <div class="container">
             
                 </div>
              </div>
           </div>
        </div>
        <div class="footer-bottom">
           <div class="container">
              <div class="row justify-content-between gy-3">
                 <div class="col-md-6">
                    <p class="mb-0">JOSHUA MATIAS</p>
                     <p class="mb-0"> BSIT Student</p>
                 </div>
                 <div class="col-auto">
                    <p class="mb-0">BSIT3B</p>
                 </div>
              </div>
  </footer>
</html>
