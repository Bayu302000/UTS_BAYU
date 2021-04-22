<?php
	//koneksi ke database mysql
	include "conn.php";

	//mendapatkan variabel post
	$merk_baju = isset($_POST ['merk_baju']) ? $_POST ['merk_baju'] : "";
	
	//echo $merk_baju;
	$ukuran = isset($_POST ['ukuran']) ? $_POST ['ukuran'] : "";
	//echo $ukuran;
	
	//query menambahkan data 
	$sql = "INSERT INTO `baju` (`merk_baju`, `ukuran`) VALUES ('".$merk_baju."', '".$ukuran."');";
	//echo $sql;
	
	//running query
	$query = mysqli_query($conn, $sql);
	if($query){
		$msg = "simpan data  baju berhasil";
	}else{
		$msg = "simpan data baju gagal";
	}
	
	//echo $msg;
	//echo 'test';
	$response = array(
		'status' => 'OK',
		'pesan' =>$msg
	);
	
	echo json_encode($response);
?>