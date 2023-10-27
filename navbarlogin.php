<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Employee</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="css/navbar.css">
<link rel="stylesheet" type="text/css" href="css/navbarlogin.css">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script>

$(document).on("click", ".action-buttons .dropdown-menu", function(e){
	e.stopPropagation();
});
</script>
</head> 

<header id="bsit">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h2 class="text-white-50 mx-auto mt-2 mb-5">WELCOME TO OUR WEBSITE</h2>
      </div>
    </div>
</header>

<body>
<style>
        body {
        background-image:url('img/trees.png');
        background-repeat: no-repeat;
        background-size:cover;
        }
        </style>

<nav class="navbar fixed-top navbar-expand-lg">

	<button type="button" 
	class="navbar-toggler" 
	data-toggle="collapse" 
	data-target="#navbarCollapse">

		<span class="navbar-toggler-icon"></span>
	</button>
	
		<div class="navbar-nav ml-auto">
			<div class="nav-item dropdown">
				<a href="Login.php" class="btn btn-md mt-0.5 mr-0">Login</a>
			</div>
			<div >
				<a href="index.php" class="btn btn-primary sign-up-btn">Sign up</a>
			</div>
        </div>
</nav>

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
</footer>

</body>
</html>
  