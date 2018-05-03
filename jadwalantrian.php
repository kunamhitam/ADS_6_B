<?php

require_once 'connect.php';

   $sql = 'SELECT pasien_id,
				  pasien_nama,
                  pasien_alamat
             FROM profilpasien
         ORDER BY pasien_id';

   $query = $db->query($sql);
   $query->setFetchMode(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
<title>Jadwal Antrian</title>
</head>
<body>

<h1> Jadwal Antrian </h1>

<table class="table table-bordered table-condensed">
	<thead>
		<tr>
			<th>Nomor Antrian</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Waktu Antrian</th>
		</tr>
	</thead>
<tbody>

	<?php while ($row = $query->fetch()): ?>
		<tr>	
			<td><?php echo $row['pasien_id']?></td>
			<td><?php echo $row['pasien_nama']?></td>
			<td><?php echo $row['pasien_alamat']; ?></td>
		</tr>
	<?php endwhile; ?>

</tbody>

</table>

</body>
</html>
