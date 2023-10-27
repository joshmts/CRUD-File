<?php
session_start();
    require 'connection.php';
?>
<!doctype html>
<html lang="en">
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Employee Info </title>
</head>
<body>
<style>
        body {
        background-image:url('img/white.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        }
        </style>
<section id="employee">

<table id="myTable">
  <tr class="header">
 
  </tr>

  <div class="container mt-4">
<?php include('message.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Employee Details
                    <a href="employee-create.php" class="btn btn-primary float-end">Add Employee</a>
                    <a href="navbarlogin.php" class="btn btn-danger ">Back</a>

                </h4>
            </div>  
            <form action="search.php" method="GET">
	        <input type="text" id="search_text"  class="formcontrol" name="search_text" placeholder="Search here.." />
</form>
</div>
<div id="result"></div>
</div>
    </div>
</div>
</div style="clear:both"></div>


  </body>
</html>





<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"livesearch.php",
			method:"POST",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});




</script>
      




