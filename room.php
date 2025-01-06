<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "db_jaya";
$koneksi = mysqli_connect($servername, $username, $password, $database);
$selectQuery = "SELECT * FROM kamar";
$result = $koneksi->query($selectQuery);
$datapemesanan = []; // Inisialisasi array
while ($row = mysqli_fetch_array($result)) {
    $datapemesanan[] = $row;
}
?>
<html>
<head>
    <title>Rooms Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100">
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="hidden md:flex flex-1 justify-center space-x-6">
                <a class="text-gray-700" href="index.php">Home</a>
                <a class="text-gray-700" href="about.php">About</a>
                <a class="text-blue-500" href="room.php">Rooms</a>
                <a class="text-gray-700" href="service.php">Services</a>
                <a class="text-gray-700" href="contact.php">Contact Us</a>
                <a class="text-gray-700" href="booking1.php">Booking</a>
            </div>
            <div class="flex items-center space-x-4">
                <a class="text-gray-700" href="#"><i class="fas fa-bell"></i></a>
                <a class="text-gray-700" href="profile.php"><i class="fas fa-user"></i></a>
                <a class="text-gray-700" href="#"><i class="fas fa-edit"></i></a>
            </div>
        </div>
    </header>
    <div class="container mx-auto px-6 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($datapemesanan as $K): ?>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="pictures/<?php echo $K["gambar_kamar"]; ?>" class="w-full h-48 object-cover" title="<?php echo $K['gambar_kamar']; ?>" alt="Room with a bed and a large window">
                    <div class="p-4">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-500"></i>
                            </div>
                            <i class="far fa-heart text-gray-400"></i>
                        </div>
                        <h3 class="mt-2 text-lg font-medium text-gray-800"><?php echo $K['jenis_kamar']; ?></h3>
                        <p class="text-gray-600"><?php echo $K['jumlah_kasur']; ?></p>
                        <p class="mt-2 text-blue-500 text-xl font-medium"><?php echo $K['harga_kamar']; ?>
                            <span class="text-gray-600 text-sm">/ night</span>
                        </p>
                        <p class="mt-2 text-gray-600">
                            <?php echo $K['ketersediaan']; ?> Tersedia
                        </p>
                        <div class="text-left mt-4">
                            <?php if ($K['ketersediaan']): ?>
                                <button type="button" class="bg-blue-500 text-white px-6 py-2 rounded-md" onclick="window.location.href='booking1.php'">Booking</button>
                            <?php else: ?>
                                <button type="button" class="bg-gray-400 text-white px-6 py-2 rounded-md" disabled>Kamar Penuh</button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>