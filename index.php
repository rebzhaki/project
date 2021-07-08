<!DOCTYPE html>
<html>
<head>
	<title>form handling</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

	<?php 
 			$emailErr = $messageErr = "";
 			$email = $message = "";
 			
		
			  if (empty($_POST["email"])) {
			    $emailErr = "Email is required";
			   
			  } else {
			    $email = $_POST["email"];
			  }

			   if (empty($_POST["message"])) {
				    $messageErr = "Message is required";
				  } else {
				    $message = $_POST["message"];
				  }
				
				
	 ?>
	<nav class="navbar sticky-top bg-dark">
		<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Action</a></li>
      <li><a class="dropdown-item" href="#">Another action</a></li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Separated link</a></li>
    </ul>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
	</nav>



	<div class="container-fluid">
		<div class="row">
		<div class="col-sm-6">

	<form method="POST" action="success.php">
			<div class="form-group">
			  <label  class="form-label">Email address</label>
			  <input type="email" class="form-control"  placeholder="name@example.com" name="email">
			  <span class="error">* <?php echo $emailErr;?></span>
			</div>
	
			<div class="form-group">
			  <label  class="form-label">Example textarea</label>
			  <textarea class="form-control" rows="3" name="message"></textarea>
			</div>
	<div class="form-group">
		<button class="btn btn-success" type="submit">Submit</button>
	</div>

	</div>
	<div class="container-fluid">
	<!--  -->
	</div>
	</div>
	</div>
</form>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>