<?php
session_start();
if(isset($_POST['removeadmin'])){

include_once 'dbconn.php';

$admin_id=mysqli_real_escape_string($connections,$_POST['removename']);


	if(empty($admin_id)){

		header("Location: ../executive/removeadmin.php?Error=blanks");
		
		exit();

	}else{

		$sql1="SELECT * FROM admin WHERE admin_name='$admin_id' OR admin_email='$admin_id'";
		$res=mysqli_query($connections,$sql1);
		$cres=mysqli_num_rows($res);


		if($cres<1){

			header("Location: ../executive/removeadmin.php?Error");
			
			exit();
			
		}else{


			if($row=mysqli_fetch_assoc($res)){

				$sql1="DELETE FROM admin WHERE admin_name='$admin_id' OR admin_email='$admin_id'";
				mysqli_query($connections,$sql1);
						header("Location: ../executive/removeadmin.php?delete=Succsess");
				

			}

		}
	}

}else{

	header("Location: ../executive/removeadmin.php");
	
	exit();

}