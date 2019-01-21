<?php

if(isset($_POST['removeuser'])){

include_once 'dbconn.php';

$admin_id=mysqli_real_escape_string($connections,$_POST['removename']);


	if(empty($admin_id)){

		header("Location: ../admins/removeusers.php?Error=blanks");
		
		exit();

	}else{

		$sql1="SELECT * FROM users WHERE user_name='$admin_id' OR user_email='$admin_id'";
		$res=mysqli_query($connections,$sql1);
		$cres=mysqli_num_rows($res);


		if($cres<1){

			header("Location: ../admins/removeusers.php?Error");
			
			exit();
			
		}else{


			if($row=mysqli_fetch_assoc($res)){

				$sql1="DELETE FROM users WHERE user_name='$admin_id' OR user_email='$admin_id'";
				mysqli_query($connections,$sql1);
						header("Location: ../admins/removeusers.php?delete=Succsess");
				

			}

		}
	}

}else{

	header("Location: ../admins/removeusers.php");
	
	exit();

}