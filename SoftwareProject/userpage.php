<!DOCTYPE html>
<html>
<head>
	<title>Users controls</title>
	
	
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="custom/style.css">
	<link rel="stylesheet" href="backs.css">

	
	
</head>

<body class="addback03">

<div class="model-dialog text-center">
	
	
				
	

		<div class="admins">
			<form action="employee/regempbasic.php">
		<button type="submit" id="add_emp" name="add_emp" class="btn btn-danger">Create User Account</button></form>
		<br/><br/>
		<form action="employee/removeemp.php">
		<button type="submit" id="remove_emp" name="remove_emp" class="btn btn-danger">Remove User Account
		</button>
		</form>
		<br/><br/>
		<form action="employee/changeemp.php">
		<button type="submit" id="change_emp" name="change_emp" class="btn btn-danger">Change my password
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