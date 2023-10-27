<?php
session_start();
require 'connection.php';

if(isset($_POST['save_employee']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);  
    $department = mysqli_real_escape_string($con, $_POST['department']);
    $password = mysqli_real_escape_string($con, $_POST['password1']);
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    

    if(! preg_match('/^[0-9]{11}+$/', $phone) ){
        echo '<script>alert("Phone number must 11 numbers")</script>';
        die();
      }
      if (strlen($password)<8){
        echo '<script>alert("Password must contain at least 8 characters")</script>';
        die();
      }
      if (! preg_match("/[a-z]/i", $password)){
        echo '<script>alert("Password must contain at least one letter")</script>';
        die();
      }
      if (! preg_match("/[0-9]/", $password)){
        echo '<script>alert("Password must contain at least one number")</script>';
        die();
      }
      if ($password !== $_POST["password2"]){
        echo '<script>alert("Password must Match!")</script>';
        die();
      }

      $sql_phone = "SELECT * FROM tbl_employee WHERE phone='$phone'";
      $sql_email = "SELECT * FROM tbl_employee WHERE email='$email'";
      $res_phone = mysqli_query($con, $sql_phone);
      $res_email = mysqli_query($con, $sql_email);
      if (mysqli_num_rows($res_email) > 0) {
        echo '<script>
        alert("Email already exist!");
        die();
        </script>';
    
        }
    else if(mysqli_num_rows($res_phone) > 0){
        echo '<script>
        alert("Phone Number already exist!");
        die();
        </script>';
        }
    else{
      $query = "INSERT INTO tbl_employee (name,email,phone,password,password_hash,department) 
                    VALUES ('$name','$email','$phone','$password','$password_hash','$department')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Employee Created Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Emloyee Not Created";
        header("Location: index.php");
        exit(0);
    }

}
}
if(isset($_POST['update_employee']))
{
    $emp_id = mysqli_real_escape_string($con, $_POST['emp_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $password = mysqli_real_escape_string($con, $_POST['password1']);
    $department = mysqli_real_escape_string($con, $_POST['department']);

    $query = "UPDATE tbl_employee SET name='$name', email='$email', phone='$phone', password='$password', 
                                                department='$department' WHERE emp_id='$emp_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Employee Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Employee Not Updated";
        header("Location: index.php");
        exit(0);
    }

}
if(isset($_POST['delete_employee']))
{
    $emp_id = mysqli_real_escape_string($con, $_POST['delete_employee']);

    $query = "DELETE FROM tbl_employee WHERE emp_id='$emp_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Employee Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Employee Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

?>
