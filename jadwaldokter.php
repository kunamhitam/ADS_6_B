<?php

require_once 'connect.php';

   $sql = 'SELECT dokter_nama,
                  dokter_spesialis,
                  dokter_notelp,
                  dokter_waktupraktek
             FROM profildokter
         ORDER BY dokter_nama';

   $query = $db->query($sql);
   $query->setFetchMode(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
<title>Jadwal Dokter</title>
</head>
<body>
<h1>Jadwal Dokter</h1>

<table class="table table-bordered table-condensed">
	<thead>
		<tr>
			<th>Nama Dokter</th>
			<th>Spesialis</th>
			<th>Nomor Telepon</th>
			<th>Waktu Praktek</th>
		</tr>
	</thead>
	
<tbody>

	<?php while ($row = $query->fetch()): ?>
		<tr>
			<td><?php echo $row['dokter_nama']?></td>
			<td><?php echo $row['dokter_spesialis']; ?></td>
			<td><?php echo $row['dokter_notelp']; ?></td>
			<td><?php echo $row['dokter_waktupraktek']; ?></td>
		</tr>
	<?php endwhile; ?>

</tbody>

</table>

</body>
</html>
