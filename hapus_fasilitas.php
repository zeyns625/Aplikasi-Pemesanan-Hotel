<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id_fasilitas = $_GET['id'];
    $query = "DELETE FROM fasilitas WHERE id_fasilitas = $id_fasilitas";

    if (mysqli_query($koneksi, $query)) {
        echo "
                <script>
                    alert('Successfully Added');
                    document.location.href = 'admin_fasilitas.php';
                </script>
                ";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
} else {
    echo "No id provided";
}
?>