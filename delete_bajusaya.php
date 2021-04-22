<?php
	//include koneksi ke database
	include "conn.php";
	
	//echo "update bajusaya";
	
	//menangkap variabel parameter get_browser
	$id = $_GET ['id'];
	//echo $id;
	
	$sql = "DELETE FROM `baju` WHERE `id_baju` = ".$id.";";
	//echo $sql;
	
	//running query
	$query = mysqli_query($conn, $sql);
	if($query){
		$msg = "dalete data  baju berhasil";
	}else{
		$msg = "delete data baju gagal";
	}
	
	//echo $msg;
	//echo 'test';
	$response = array(
		'status' => 'OK',
		'pesan' =>$msg
	);
	
	echo json_encode($response);
?>