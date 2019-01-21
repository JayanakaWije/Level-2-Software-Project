<!DOCTYPE html>
<html>
<head>
	<title>Admin controls</title>
	
	
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="custom/style.css">
	<link rel="stylesheet" href="backs.css">

	
	
</head>

<body class="addback">

<div class="model-dialog text-center">
	
	
				
	

		<div class="admins">
			<form action="admins/adduser.php">
		<button type="submit" id="add_user" name="add_use" class="btn btn-danger">Create User Account</button></form>
		<br/><br/>
		<form action="admins/removeusers.php">
		<button type="submit" id="remove_use" name="remove_use" class="btn btn-danger">Remove User Account
		</button>
		</form>
		<br/><br/>
		<form action="admins/change_admin.php">
		<button type="submit" id="remove_use" name="remove_use" class="btn btn-danger">Change my password
		</button>
		</form>
		<br/><br/>
		</div>
	

			
</div>
	<script type="text/javascript" src="js/jquery.bundle.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="customjs/custom.js"></script>

</body>
</html>