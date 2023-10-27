<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="\css\header.css">
    <title>Employee Creation</title>

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
    
            <div class col-md-12>
                <div class="card">
                <div class="card-header">

<h4> Adding Employee
      <a href="navbarlogin.php" class="btn btn-danger float-end">BACK</a>
</h4>
</div>
<div class="card-body">
    <form action="code.php" method="POST">

        <div class="mb-3">
            <label>Employee Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label>Employee Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label>Employee Phone</label>
            <input type="text" name="phone" class="form-control">
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password1" class="form-control">
        </div>
        <div class="mb-3">
            <label>Confirm Password</label>
            <input type="password" name="password2" class="form-control">
        </div>
        <div class="mb-3">
            <label>Employee Department</label>
            <input type="text" name="department" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" name="save_employee" class="btn btn-primary">Save Employee</button>
        </div>
    </form>
 </div>  
</div>


                    </div>
                </div>
            </div>
        </div>

  </body>

  
</html>
