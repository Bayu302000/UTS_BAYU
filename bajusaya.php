<?php
	//koneksi ke database mysql
	include "conn.php";
	
	//membuat query/sql untuk mengambil seluruh data baju
	$sql = "SELECT * FROM baju";
	$query = mysqli_query($conn, $sql);
	while ($data = mysqli_fetch_array($query)){
		//echo $data["ukuran"]." ";
		
		$item [] = array(
			'merk_baju' =>$data["merk_baju"],
			'ukuran' =>$data ["ukuran"],
			'id' =>$data ["id_baju"]
		);
	}
	
	$response = array(
		'status' => 'OK',
		'data' =>$item
	);
	
	echo json_encode($response);
?>