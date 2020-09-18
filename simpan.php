<?php
	$type=$_POST['type'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	if ($username == 'admin'){
		$sql = "SELECT * FROM login";
		if ($row ['password'] == $password{
			header('Location: admin/');
		} else { # popup 'ur fail'
		}
	} else {
		$sql = "SELECT * FROM peserta WHERE ic =?";
		if  ($stmt -> num_rows == 1){
			if($row['password'] == $password){
			header ('Location: peserta/');
			} else{
				# popup 'anda gagal'
			}
		} else{
			# anda bukan pesrta yang daftar'
		}
	}
	
?>