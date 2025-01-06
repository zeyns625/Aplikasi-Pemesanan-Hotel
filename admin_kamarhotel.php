<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login_petugas.php');
    exit();
}
$role = $_SESSION['role'];
?>
<?php

                $servername = "localhost";
                $username   = "root";
                $password   = "";
                $database   = "db_jaya";
                $koneksi = mysqli_connect($servername,$username,$password,$database);
                $selectQuery = "SELECT * FROM kamar";
                  $result = $koneksi->query($selectQuery);
                  while($row = mysqli_fetch_array($result)){
                    $datapemesanan[] = $row;
                    $no = 1;
                  }
                  ?>
<html>
<head>
    <title>
        Kamar Hotel Admin
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100">
    <div class="flex flex-col md:flex-row min-h-screen">
        <!-- Sidebar -->
        <div class="w-full md:w-1/4 bg-blue-500 h-auto md:h-screen p-4">
            <div class="text-white text-2xl font-bold mb-8 border-b border-white pb-2">JAYA HOTEL</div>
            <div class="text-white text-xl font-semibold mb-4 border-b border-white pb-2">PETUGAS</div>
            <div class="text-white mb-4 pb-2">
                <a href="dash_petugas.php" class="flex items-center">
                    <i class="fas fa-home mr-2"></i> Dashboard
                </a>
            </div>
            <div class="text-white mb-4">
                <a href="admin_kamarhotel.php" class="flex items-center">
                    <i class="fas fa-bed mr-2"></i> Kamar Hotel
                </a>
            </div>
            <div class="text-white mb-4">
                <a href="admin_fasilitas.php" class="flex items-center">
                    <i class="fas fa-bed mr-2"></i> Fasilitas Hotel
                </a>
            </div>
            <div class="text-white mb-4">
                <a href="rsv_data.php" class="flex items-center">
                    <i class="fas fa-bed mr-2"></i> Reservasi
                </a>
            </div>
            <div class="text-white">
                <a href="logout_petugas.php" class="flex items-center">
                    <i class="fas fa-lock mr-2"></i> Log Out
                </a>
            </div>
        </div>
        <!-- Main Content -->
        <div class="w-full md:w-4/5 p-4 md:p-8">
            <div class="bg-gray-300 p-4 rounded mb-6">
                <h2 class="text-xl font-bold">
                    Kamar Hotel
                </h2>
            </div>
            <div class="bg-white p-4 rounded shadow overflow-x-auto">
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="px-4 py-2">
                                Jenis Kamar
                            </th>
                            <th class="px-4 py-2">
                                Harga Kamar
                            </th>
                            <th class="px-4 py-2">
                                Jumlah Kasur
                            </th>
                            <th class="px-4 py-2">
                                Ketersediaan
                            </th>
                            <th class="px-4 py-2">
                                Gambar Kamar
                            </th>
                            <th class="px-4 py-2">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($datapemesanan as $K):?>
                        <tr>
                            <td class="border px-4 py-2">
                            <?php echo $K['jenis_kamar']; ?>
                            </td>
                            <td class="border px-4 py-2">
                            <?php echo $K['harga_kamar']; ?>
                            </td>
                            <td class="border px-4 py-2">
                            <?php echo $K['jumlah_kasur']; ?>
                            </td> 
                            <td class="border px-4 py-2">
                            <?php echo $K['ketersediaan']; ?>
                            </td> 
                            <td class="border px-4 py-2">
                            <img src="pictures/<?php echo $K["gambar_kamar"]; ?>" width=200 title="<?php echo $K['gambar_kamar']; ?>">
                            </td> 
                            <td class="border px-4 py-2">
                                <a class="bg-blue-500 text-white px-2 py-1 rounded mr-2" href="edit_kamar.php?id=<?php echo $K['id_kamar'] ?>">
                                    <i class="fas fa-edit">
                                    </i>
                                    Edit
                                </a>
                                <a class="bg-orange-500 text-white px-2 py-1 rounded" href="hapus_kamar.php?id=<?php echo $K['id_kamar'] ?>">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                            <?php endforeach; ?>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-6">
                <a class="bg-blue-500 text-white px-4 py-2 rounded" href="tambah_kamar.php">
                    Tambah Data Kamar
                </a>
                <div class="mt-6">
                <a class="bg-blue-500 text-white px-4 py-2 rounded" href="excel_kamar.php">
                    Excel
                </a>
            </div>
            
        </div>
    </div>
</body>

</html>