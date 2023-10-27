<?php
session_start();
require 'connection.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="..\css\employee.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Employee Edit</title>

  </head>
  <body>
  <style>
        body {
        background-image:url('img/white.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        }
        </style>
<div class="container mt-5">

<section id="employee">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">

                    <h4> Employee edit record
                          <a href="index.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                    </div>
                    <div class="card-body">

                    <?php
                        if(isset($_GET['id']))
                        {
                            $emp_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM tbl_employee WHERE emp_id='$emp_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $emp_id = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="emp_id" value="<?= $emp_id['emp_id']; ?>">

                                    <div class="mb-3">
                                        <label>Employee Name</label>
                                        <input type="text" name="name" value="<?=$emp_id['name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Employee Email</label>
                                        <input type="email" name="email" value="<?=$emp_id['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Employee Phone</label>
                                        <input type="text" name="phone" value="<?=$emp_id['phone'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> Password</label>
                                        <input type="text" name="password1" value="<?=$emp_id['password'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> Employee Department</label>
                                        <input type="text" name="department" value="<?=$emp_id['department'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_employee" class="btn btn-primary">
                                            Update Employee
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
