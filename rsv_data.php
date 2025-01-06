<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login_admin.php');
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
                $selectQuery = "SELECT * FROM reservasi";
                  $result = $koneksi->query($selectQuery);
                  while($row = mysqli_fetch_array($result)){
                    $datapemesanan[] = $row;
                    $no = 1;
                  }
                  ?>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="bg-gray-100">
    <div class="flex flex-col md:flex-row">
        <!-- Sidebar -->
        <div class="w-full md:w-1/4 bg-blue-500 h-auto md:h-screen p-4">
            <div class="text-white text-2xl font-bold mb-8 border-b border-white pb-2">JAYA HOTEL</div>
            <div class="text-white text-xl font-semibold mb-4 border-b border-white pb-2">PETUGAS</div>
            <div class="text-white mb-4 pb-2">
                <a href="dash_admin.php" class="flex items-center">
                    <i class="fas fa-home mr-2"></i> Dashboard
                </a>
            </div>

            <?php if ($role == 'admin'): ?>
            <div class="text-white mb-4">
                <a href="admin_kamarhotel.php" class="flex items-center">
                    <i class="fas fa-bed mr-2"></i> Kamar Hotel
                </a>
            </div>
            <?php endif; ?>
            
            <?php if ($role == 'admin'): ?>
            <div class="text-white mb-4">
                <a href="admin_fasilitas.php" class="flex items-center">
                    <i class="fas fa-bed mr-2"></i> Fasilitas Hotel
                </a>
            </div>
            <?php endif; ?>

            <?php if ($role === 'resepsionis' ||  $role === 'admin'): ?>
            <div class="text-white mb-4">
                <a href="rsv_data.php" class="flex items-center">
                    <i class="fas fa-bed mr-2"></i> Reservasi
                </a>
            </div>
            <?php endif; ?>

            <div class="text-white">
                <a href="logout_petugas.php" class="flex items-center">
                    <i class="fas fa-lock mr-2"></i> Log Out
                </a>
            </div>
        </div>
        <!-- Main Content -->
        <div class="w-full md:w-4/5 p-4 md:p-8">
            <div class="bg-gray-200 p-4 rounded-md mb-4">
                <h2 class="text-xl font-bold">Data Reservasi</h2>
            </div>
            <div class="bg-white p-4 rounded-md shadow-md overflow-x-auto">
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-gray-100">
                            
                            <th class="px-4 py-2 border">Nama Pemesan</th>
                            <th class="px-4 py-2 border">No HP</th>
                            <th class="px-4 py-2 border">Email</th>
                            <th class="px-4 py-2 border">Check In</th>
                            <th class="px-4 py-2 border">Check Out</th>
                            <th class="px-4 py-2 border">Jumlah Kamar</th>
                            <th class="px-4 py-2 border">Jenis Kamar</th>
                            <th class="px-4 py-2 border">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($datapemesanan as $K):?>
                        <tr>
                            
                            <td class="px-4 py-2 border"><?php echo $K['nama_pemesan']; ?></td>
                            <td class="px-4 py-2 border"><?php echo $K['no_hp']; ?></td>
                            <td class="px-4 py-2 border"><?php echo $K['email']; ?></td>
                            <td class="px-4 py-2 border"><?php echo $K['check_in']; ?></td>
                            <td class="px-4 py-2 border"><?php echo $K['check_out']; ?></td>
                            <td class="px-4 py-2 border"><?php echo $K['jumlah_kamar']; ?></td>
                            <td class="px-4 py-2 border"><?php echo $K['jenis_kamar']; ?></td>
                            <td class="border px-4 py-2">
                                <a class="bg-blue-500 text-white px-2 py-1 rounded mr-2" href="edit_reservasi.php?id=<?php echo $K['id_reservasi'] ?>">
                                    <i class="fas fa-edit">
                                    </i>
                                    Edit
                                </a>
                                <a class="bg-orange-500 text-white px-2 py-1 rounded" href="hapus_reservasi.php?id=<?php echo $K['id_reservasi'] ?>">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                                <div class="mt-4">
                                 <a href="cetak_pdf.php" class="bg-green-600 text-white px-4 py-2 rounded-md inline-block">
                                 <i class="fas fa-print mr-2"></i>Cetak Bukti Pembayaran
                                 </a>
                            </td>
                            <?php endforeach; ?>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                <a href="rsv_editpesan.php" class="bg-blue-600 text-white px-4 py-2 rounded-md inline-block">
                    <i class="fas fa-plus mr-2"></i>Tambah Data Reservasi
                </a>
            </div>
        </div>
    </div>
</body>

</html>