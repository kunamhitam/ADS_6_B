<?php

require_once("connect.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $pasien_nama = filter_input(INPUT_POST, 'pasien_nama', FILTER_SANITIZE_STRING);
    $pasien_alamat = filter_input(INPUT_POST, 'pasien_alamat', FILTER_SANITIZE_STRING);
    $pasien_notelp = filter_input(INPUT_POST, 'pasien_notelp', FILTER_SANITIZE_STRING);
	$pasien_keluhan = filter_input(INPUT_POST, 'pasien_keluhan', FILTER_SANITIZE_STRING);


    // menyiapkan query
    $sql = "INSERT INTO profilpasien (pasien_nama, pasien_alamat, pasien_notelp, pasien_keluhan) 
    VALUES (:pasien_nama, :pasien_alamat, :pasien_notelp, :pasien_keluhan)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":pasien_nama" => $pasien_nama,
        ":pasien_alamat" => $pasien_alamat,
        ":pasien_notelp" => $pasien_notelp,
        ":pasien_keluhan" => $pasien_keluhan
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: jadwalantrian.php");
}

?>

<!DOCTYPE HTML> 
<html lang="id"> 
	<head> 
		<title>REGISTER</title> 
		
	</head> 
<head>
<title>DokterQueue</title>


<body>
		<div id="isi"> 
			<form method="POST" action="">
				<p align="center">
					<input type="text" name="pasien_nama" placeholder="NAMA" title="harus huruf" size="15" required>
				</p>
				<p align="center">
					<input type="text" name="pasien_alamat" placeholder="ALAMAT" title="harus huruf" size="15" required>
				</p>
				<p align="center">
					<input type="text" name="pasien_notelp" placeholder="NOMOR TELEPON" title="harus angka" size="15" required>
				</p>
				<p align="center">
					<input type="text" name="pasien_keluhan" placeholder="KELUHAN" title="harus huruf" size="15" required>
				</p>
				
			
				<p align="center">
					<input id="button" type="submit" name="register" value="SUBMIT">
				</p>
			</form>
		</div>
			
</body>
</html>
