<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data_Fasilitas.xls");
include 'koneksi.php';
echo "<table border='1'>";
echo "<thead>
<tr>
<th>Fasilitas</th>
<th>Gambar Fasilitas</th>
</tr>
</thead>";
$query = mysqli_query($koneksi, "SELECT * FROM fasilitas");
while ($row = mysqli_fetch_assoc($query)) {
echo "<tr>
<td>{$row['fasilitas']}</td>
<td>{$row['gambar_fasilitas']}</td>
</tr>";
}
echo "</table>";
?>