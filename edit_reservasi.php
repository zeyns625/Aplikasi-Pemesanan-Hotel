
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="flex flex-col md:flex-row">
        <!-- Sidebar -->
        <div class="w-full md:w-1/4 bg-blue-500 h-auto md:h-screen p-4">
            <div class="text-white text-2xl font-bold mb-8 border-b border-white pb-2">JAYA HOTEL</div>
            <div class="text-white text-xl font-semibold mb-4 border-b border-white pb-2">Admin</div>
            <div class="text-white mb-4 pb-2">
                <a href="dash_admin.php" class="flex items-center">
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
                <a href="logout_admin.php" class="flex items-center">
                    <i class="fas fa-lock mr-2"></i> Log Out
                </a>
            </div>
        </div>
        <!-- Main Content -->
        <div class="w-full md:w-3/4 p-4 md:p-8">
            <div class="bg-gray-300 p-4 rounded-md mb-8">
                <h2 class="text-xl font-semibold">Update data Reservasi</h2>
            </div>

            <form action="update_reservasi.php" method="post" autocomplete="off" enctype="multipart/form-data">
            <?php
            $id_reservasi = $_GET['id'];
            include "koneksi.php";
            $query = mysqli_query($koneksi, "SELECT * FROM reservasi WHERE id_reservasi = $id_reservasi");
            while ($data = mysqli_fetch_array($query)){
            ?>
                 <input type="hidden" value="<?php echo $data['id_reservasi'];?>" name="id_reservasi">
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Nama Pemesan</label>
                    <input type="text" name="nama_pemesan" class="w-full border-2 border-blue-500 rounded-full p-2"id="exampleInputEmail1" value="<?php echo $data['nama_pemesan']; ?>" placeholder="Masukan Nama Pemesan">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">No HP</label>
                    <input type="text" name="no_hp" class="w-full border-2 border-blue-500 rounded-full p-2" id="exampleInputPassword1" value="<?php echo $data['no_hp']; ?>" placeholder="Masukan No HP">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Email</label>
                    <input type="text" name="email" class="w-full border-2 border-blue-500 rounded-full p-2" id="exampleInputPassword1" value="<?php echo $data['email']; ?>" placeholder="Masukan Email">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Check in</label>
                    <input type="date" name="check_in" class="w-full border-2 border-blue-500 rounded-full p-2" id="exampleInputPassword1" value="<?php echo $data['check_in']; ?>" placeholder="Masukan Tanggal Check In">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Check Out</label>
                    <input type="date" name="check_out" class="w-full border-2 border-blue-500 rounded-full p-2" id="exampleInputPassword1" value="<?php echo $data['check_out']; ?>" placeholder="Masukan Tanggal Check Out">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Jumlah Kamar</label>
                    <input type="text" name="jumlah_kamar" class="w-full border-2 border-blue-500 rounded-full p-2" id="exampleInputPassword1" value="<?php echo $data['jumlah_kamar']; ?>" placeholder="Masukan Jumlah Kamar">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Jenis Kamar</label>
                    <input type="text" name="jenis_kamar" class="w-full border-2 border-blue-500 rounded-full p-2" id="exampleInputPassword1" value="<?php echo $data['jenis_kamar']; ?>" placeholder="Masukan Jenis Kamar">
                </div>
                <button type="submit"name="proses" value="upload" class="bg-blue-600 text-white px-4 py-2 rounded-md">Simpan</button>
                </div>
            <?php }
            ?>
            </form>
        </div>
    </div>
</body>

</html>