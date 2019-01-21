<!DOCTYPE html>
<html>
<head>
	<title>Remove User</title>
	
	
	
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../custom/style.css">
	<link rel="stylesheet" href="../backs.css">
	
	
</head>
<body class="addback">

<div class="model-dialog text-center">
	<div class="col-sm-9 main_section_admin_remove">
		<div class="model-content">
			
			<div class="col-12 form-input">
				
	
				<form action="../include/deluser.php" method="post">
	

		<div class="form-group">
		<input type="text" name="removename" class="form-control" placeholder="Enter admin name/admin e-mail">
		</div>
		
		
		<button type="submit" name="removeuser" class="btn btn-success">Remove</button>
	
	</form>

			</div>
			
	
		</div>
	</div>
</div>
	<script type="text/javascript" src="../js/jquery.bundle.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>

</body>
</html>