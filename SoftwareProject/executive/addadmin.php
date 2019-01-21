<!DOCTYPE html>
<html>
<head>
	<title>Add Admins</title>
	
	
	
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../custom/style.css">
	<link rel="stylesheet" href="../backs.css">
	
	
</head>
<body class="addback2">

<div class="model-dialog text-center">
	<div class="col-sm-9 main_section_admin_add">
		<div class="model-content">
			
			<div class="col-12 form-input">
				
	
				<form action="../include/adminreg.php" method="post">
	

		<div class="form-group">
		<input type="text" name="eid" class="form-control" placeholder="Enter employee ID here">
		</div>
		<div class="form-group">
		<input type="text" name="username" class="form-control" placeholder="Enter Admin name here">
		</div>
		<div class="form-group">
		<input type="email" name="e-mail" class="form-control" placeholder="Enter e-mail here">
		</div>
		<div class="form-group">
		<input type="password" name="pass1" class="form-control" placeholder="Enter Password here">
		</div>
		<div class="form-group">
		<input type="password" name="pass2" class="form-control" placeholder="Re-enter Password here">
		</div>
		
		<button type="submit" name="register" class="btn btn-success">Register</button>
	
	</form>

			</div>
			
	
		</div>
	</div>
</div>
	<script type="text/javascript" src="../js/jquery.bundle.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
	

</body>
</html>