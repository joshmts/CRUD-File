<?php
require 'connection.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">

                    <h4> Employee View Details
                          <a href="index.php" class="btn btn-danger float-end">BACK</a>
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
                                  
                                    <div class="mb-3">
                                        <label>Employee Name</label>
                                        <p class="form-control">
                                                    <?=$emp_id['name'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Employee Email</label>
                                        <p class="form-control">
                                                    <?=$emp_id['email'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Employee Phone</label>
                                        <p class="form-control">
                                                    <?=$emp_id['phone'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Password</label>
                                        <p class="form-control">
                                                    <?=$emp_id['password_hash'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <label> Employee Department</label>
                                        <p class="form-control">
                                                    <?=$emp_id['department'];?>
                                        </p>
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
