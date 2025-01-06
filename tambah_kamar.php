
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
                <a href="fasilitas.php" class="flex items-center">
                    <i class="fas fa-bed mr-2"></i> Fasiltas Hotel
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
                <h2 class="text-xl font-semibold">Tambah Data Kamar</h2>
            </div>

            <form action="upload_kamar.php" method="post" autocomplete="off" enctype="multipart/form-data">
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Jenis Kamar</label>
                    <input type="text" name="jenis_kamar" class="w-full border-2 border-blue-500 rounded-full p-2"id="exampleInputEmail1" placeholder="Masukan Nama Kamar">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Harga Kamar</label>
                    <input type="text" name="harga_kamar" class="w-full border-2 border-blue-500 rounded-full p-2" id="exampleInputPassword1" placeholder="Masukan Harga Kamar">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Jumlah  Kasur</label>
                    <input type="text" name="jumlah" class="w-full border-2 border-blue-500 rounded-full p-2" id="exampleInputPassword1" placeholder="Masukan Jumlah Kasur">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Ketersediaan</label>
                    <input type="text" name="ketersediaan" class="w-full border-2 border-blue-500 rounded-full p-2" id="exampleInputPassword1" placeholder="Masukan Jumlah Ketersediaan">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Upload Gambar</label>
                    <input type="file" name="gambar"
                        class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-gray-300 file:text-gray-700 hover:file:bg-gray-400">
                </div>

                <div class="bg-gray-300 p-4 rounded-md">
                <button type="submit"name="proses" value="upload" class="bg-blue-600 text-white px-4 py-2 rounded-md">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>