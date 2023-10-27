<?php
session_start();
require 'connection.php';
?>
<!doctype html>
<html lang="en">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="..\css\employee.css">
    <title>Employee CRUD</title>
</head>



<body>
<section id="employee">
  <div class="container mt-4">

  <?php include('message.php'); ?>

<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">

<h4>Employee Details <div class="float-end">
<a href="employee-create.php" class="btn btn-primary "> Add Employee</a>
<a href="index.php" class="btn btn-danger ">Back</a>
</div> </h4> 

<form method="GET">
	<input type="text" id="search"  class="formcontrol" name="search" placeholder="Search here.." />
	<input type="submit" name="submit" value="Search" />
</form>
</div>



<?php
	if(isset($_GET['submit']))
	{
	$str = mysqli_real_escape_string($con, $_GET['search']);
	$query = "SELECT * FROM tbl_employee WHERE emp_id = '$str'
	or name = '$str'
	or email = '$str'
	or phone = '$str'
	or department = '$str'";

	$query_run = mysqli_query($con, $query);

	if(mysqli_num_rows($query_run) > 0)
	{
		?>
		<div class="card-body">
	<table class="table table-bordered table-striped">
	<thead>
	<tr class="text-center">
	<th>ID</th>
		<th>Employee Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Password</th>
		<th>Department</th>
		<th>Action</th>
	</tr>
</thead>
<tbody>
	<?php
	foreach($query_run as $row)
	{ ?>

	<tr class="text-center">
	<td><?= $row['emp_id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td><?= $row['phone'] ?></td>
    <td><?= $row['password'] ?></td>
    <td><?= $row['department'] ?></td>
    <td>
    <a href="employee-view.php?id=<?= $row['emp_id'] ?>" class="btn btn-info btn-sm">View</a>
    <a href="employee-edit.php?id=<?= $row['emp_id'] ?>" class="btn btn-success btn-sm">Edit</a>
    <form action="code.php" method="POST" class="d-inline">
    <button type="submit" name="delete_employee" value="<?= $row['emp_id']?>" class="btn btn-danger btn-sm">Delete</button>
    </form>
    </td>
    </tr>
<?php
}
}
else{
	echo "No Record Found";
}
}
?>
</tbody>
</table>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>