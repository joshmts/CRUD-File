<?php
$connect = mysqli_connect("localhost", "root", "", "db_employee");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM tbl_employee 
	WHERE name LIKE '%".$search."%'
	OR email LIKE '%".$search."%' 
	OR phone LIKE '%".$search."%' 
	OR department LIKE '%".$search."%' 
	";
}
else
{
	$query = "
	SELECT * FROM tbl_employee ORDER BY emp_id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
					<thead>
					<tr>
						<th>ID</th>
						<th>Employee Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Password</th>
						<th>Department</th>
						<th>Action</th>
						</tr>
						</thead>
						</tbody>';
	while($employee = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$employee["emp_id"].'</td>
				<td>'.$employee["name"].'</td>
				<td>'.$employee["email"].'</td>
				<td>'.$employee["phone"].'</td>
				<td>'.$employee["password"].'</td>
				<td>'.$employee["department"].'</td>	
				<td>
				<a href="employee-view.php?id='.$employee["emp_id"].'" class="btn btn-info btn-sm">View</a>
				<a href="employee-edit.php?id='.$employee["emp_id"].'" class="btn btn-success btn-sm">Edit</a>

<form action="code.php" method="POST" class="d-inline">
					<button type="submit" name="delete_employee" value='.$employee["emp_id"].' class="btn btn-danger btn-sm">Delete</button>
				</form>
			</td>
						
			</tr>';
		
		
	}
	
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>