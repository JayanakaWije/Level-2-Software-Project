<?php

if(isset($_POST['register'])){

	include_once 'dbconn.php';

	$eid=mysqli_real_escape_string($connections,$_POST['eid']);
	$uname=mysqli_real_escape_string($connections,$_POST['username']);
	$emails=mysqli_real_escape_string($connections,$_POST['e-mail']);
	$p1=mysqli_real_escape_string($connections,$_POST['pass1']);
	$p2=mysqli_real_escape_string($connections,$_POST['pass2']);

		if(empty($eid) || empty($uname) || empty($emails) || empty($p1) || empty($p2)){

			header("Location: ../executive/addadmin.php?registerError=blankfields");
			exit();

		}else{


			if(!preg_match("/^[a-zA-Z]*$/", $uname)){

			header("Location: ../executive/addadmin.php?registerError=InavalidUsername");
			exit();

			}else{


				if(!filter_var($emails,FILTER_VALIDATE_EMAIL)){

					
					header("Location: ../executive/addadmin.php?registerError=Inavalidemail");
					exit();

				}else{


					$sql="SELECT * FROM admin WHERE admin_name='$uname'";
					$res=mysqli_query($connections,$sql);
					$checkres=mysqli_num_rows($res);

					if($checkres>0){

						
						header("Location: ../executive/addadmin.php?registerError=UsernameExists");
					exit();

						
						
						

					}else{

						if($p1!=$p2){
							header("Location: ../executive/addadmin.php?registerError=PasswordConfirmError");
					exit();
				}else{
						$pwdhash=password_hash($p1,PASSWORD_DEFAULT);

						$sql1="INSERT INTO admin(admin_emp_no,admin_name,admin_email,admin_pass) VALUES('$eid','$uname','$emails','$pwdhash')";
						mysqli_query($connections,$sql1);
						header("Location: ../loginform.php?register=Succsess");
					}
					

				}

			}
			 }

		}


}else{

	header("Location: ../executive/addadmin.php");
	exit();
}