<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$name = $_POST['nama'];
		$kls = $_POST['kelas'];
		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO data_diri (nama,kelas) VALUES ('$name','$kls','$sal')";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan Siswa';
		}else{
			echo 'Gagal Menambahkan Siswa';
		}
		
		mysqli_close($con);
	}
?>