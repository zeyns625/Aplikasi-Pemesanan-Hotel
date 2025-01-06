<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id_kamar = $_GET['id'];
    $query = "DELETE FROM kamar WHERE id_kamar = $id_kamar";

    if (mysqli_query($koneksi, $query)) {
        echo "
                <script>
                    alert('Successfully Added');
                    document.location.href = 'admin_kamarhotel.php';
                </script>
                ";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
} else {
    echo "No id provided";
}
?>