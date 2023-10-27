<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>My Account</title>
<link rel="stylesheet" type="text/css" href="css/navbarlogin.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



<script>

$(document).on("click", ".action-buttons .dropdown-menu", function(e){
	e.stopPropagation();
});
</script>
</head> 

<body>
    <style>
        body {
        background-image:url('img/air.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        }
        </style>

<nav class="navbar fixed-top navbar-expand-lg">

<?php if (isset($_SESSION["user_id"])) {
        require('connection.php'); 
    
        $sql ="SELECT * FROM tbl_employee where emp_id ={$_SESSION["user_id"]}";
    
        $result = mysqli_query($con, $sql);
        $user = $result-> fetch_assoc();
}?>
<?php if (isset($user)): ?>
<p class="mt-3">Hello! <b><?= htmlspecialchars($user["name"])?></b></p>
<?php endif; ?>
        

	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
	</button>

    <form class="navbar-form form-inline ml-5">						
			
				<div class="input-group-append">
				</div>
			</div>
	</form>

	<div id="navbarCollapse" class="collapse navbar-collapse">
		<div class="navbar-nav ml-auto mr-4">
			<a href="index.php" class="nav-item nav-link">Employee List</a>
	    </div>
    </div>
	<div class="navbar-nav ml-auto">
		<a href="logout.php" class="btn btn-primary sign-up-btn">Logout</a>
	</div>
</nav>

<header id="bsit">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h2 class="text-white-50 mx-auto mt-2 mb-5">WELCOME TO EMPLOYEE</h2>
      </div>
    </div>
</header>
  
<footer>
<div class="footer-bottom">
           <div class="container">
              <div class="row justify-content-between gy-3">
                 <div class="col-md-6">
                    <p class="mb-0">BSIT 3B</p>
                     <p class="mb-0"> Software Engineer </p>
                 </div>
              </div>
           </div>
        </div>
     </footer>
</div>
</body>
</html>




