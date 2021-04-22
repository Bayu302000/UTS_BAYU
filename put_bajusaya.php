<?php
	//include koneksi ke database
	include "conn.php";
	
	//echo "update bajusaya";
	
	//menangkap variabel parameter get_browser
	$id = $_GET ['id'];
	//echo $id;
	
	//bagian ini yang ingin/akan di rubah
	$ukuran = $_POST['ukuran'];
	$merk_baju = $_POST['merk_baju'];
	
	$sql = "UPDATE `baju` SET `ukuran` = '".$ukuran."',
	`merk_baju` = '".$merk_baju."'
	WHERE `baju`.`id_baju` = ".$id.";";
	//echo $sql;
	
	//running query
	$query = mysqli_query($conn, $sql);
	if($query){
		$msg = "update data  baju berhasil";
	}else{
		$msg = "update data baju gagal";
	}
	
	//echo $msg;
	//echo 'test';
	$response = array(
		'status' => 'OK',
		'pesan' =>$msg
	);
	
	echo json_encode($response);
?>