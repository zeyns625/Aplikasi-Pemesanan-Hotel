<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data_Kamar.xls");
include 'koneksi.php';
echo "<table border='1'>";
echo "<thead>
<tr>
<th>Jenis Kamar</th>
<th>Harga Kamar</th>
<th>Jumlah Kasur</th>
<th>Gambar Kamar</th>
</tr>
</thead>";
$query = mysqli_query($koneksi, "SELECT * FROM kamar");
while ($row = mysqli_fetch_assoc($query)) {
echo "<tr>
<td>{$row['jenis_kamar']}</td>
<td>{$row['harga_kamar']}</td>
<td>{$row['jumlah_kasur']}</td>
<td>{$row['gambar_kamar']}</td>
</tr>";
}
echo "</table>";
?>