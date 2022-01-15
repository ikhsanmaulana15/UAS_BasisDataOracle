<?php
	
	$username = "ikhsan_010"; //sesuaikan dengan username  
	$password = "ikhsan_010"; //sesuaikan dengan password 
	$host = "localhost/xe"; //sesuaikan dengan host database 

	$conn = oci_connect($username,$password,$host) or die('connection failed !');
	if(!$conn){
		$err=oci_error();
		echo "Gagal Tersambung!<br /><br />";
	}else{
		//echo "koneksi berhasil !<br />";
	}
?>
