<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id_reservasi = $_GET['id'];
    $query = "DELETE FROM reservasi WHERE id_reservasi = $id_reservasi";

    if (mysqli_query($koneksi, $query)) {
        echo "
                <script>
                    alert('Successfully Added');
                    document.location.href = 'rsv_data.php';
                </script>
                ";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
} else {
    echo "No id provided";
}
?>