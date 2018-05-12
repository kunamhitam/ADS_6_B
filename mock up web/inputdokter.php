<?php

require_once("connect.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $dokter_nama = filter_input(INPUT_POST, 'dokter_nama', FILTER_SANITIZE_STRING);
    $dokter_spesialis = filter_input(INPUT_POST, 'dokter_spesialis', FILTER_SANITIZE_STRING);
    $dokter_notelp = filter_input(INPUT_POST, 'dokter_notelp', FILTER_SANITIZE_STRING);
	$dokter_waktupraktek = filter_input(INPUT_POST, 'dokter_waktupraktek', FILTER_SANITIZE_STRING);
	$dokter_foto = filter_input(INPUT_POST, 'dokter_foto', FILTER_SANITIZE_STRING);


    // menyiapkan query
    $sql = "INSERT INTO profildokter (dokter_nama, dokter_spesialis, dokter_notelp, dokter_waktupraktek; dokter_foto) 
    VALUES (:dokter_nama, :dokter_spesialis, :dokter_notelp, :dokter_waktupraktek, :dokter_foto)";
    $stmt = $db->prepare($sql);
	
    // bind parameter ke query
    $params = array(
        ":dokter_nama" => $dokter_nama,
        ":dokter_spesialis" => $dokter_spesialis,
        ":dokter_notelp" => $dokter_notelp,
        ":dokter_waktupraktek" => $dokter_waktupraktek,
		":dokter_foto" => $dokter_foto
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: jadwaldokter.php");
}

?>

<!DOCTYPE HTML> 
<html lang="id"> 
	<head> 
		<title>input dokter</title> 
		
	</head> 
<head>
<title>Input Dokter</title>


<body>
		<div id="isi"> 
			<form method="POST" action="">
				<p align="center">
					<input type="text" name="dokter_nama" placeholder="NAMA" title="harus huruf" size="15" required>
				</p>
				<p align="center">
					<input type="text" name="dokter_spesialis" placeholder="SPESIALIS" title="harus huruf" size="15" required>
				</p>
				<p align="center">
					<input type="text" name="dokter_notelp" placeholder="NOMOR TELEPON" title="harus huruf" size="15" required>
				</p>
				<p align="center">
					<input type="datetime-local" name="dokter_waktupraktek" placeholder="WAKTU PRAKTEK" title="harus huruf" size="15" required>
				</p>
				<p align="center">
					<input type="picture" name="dokter_foto" placeholder="FOTO" title="harus huruf" size="15" required>
				</p>
				
			
				<p align="center">
					<input id="button" type="submit" name="register" value="SUBMIT">
				</p>
			</form>
		</div>
			
</body>
</html>