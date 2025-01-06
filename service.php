<?php
                $servername = "localhost";
                $username   = "root";
                $password   = "";
                $database   = "db_jaya";
                $koneksi = mysqli_connect($servername,$username,$password,$database);
                $selectQuery = "SELECT * FROM fasilitas";
                  $result = $koneksi->query($selectQuery);
                  while($row = mysqli_fetch_array($result)){
                    $datapemesanan[] = $row;
                    $no = 1;
                  }
                  ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Jaya Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="bg-white text-gray-800">
    <!-- Navigation -->
<header class="bg-white shadow">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <div class="hidden md:flex flex-1 justify-center space-x-6">
        <a class="text-gray-700" href="index.php">
                    Home
                </a>
                <a class="text-gray-700" href="about.php">
                    About
                </a>
                <a class="text-gray-700" href="room.php">
                    Rooms
                </a>
                <a class="text-blue-500" href="service.php">
                    Services
                </a>
                <a class="text-gray-700" href="contact.php">
                    Contact Us
                </a>
                <a class="text-gray-700" href="booking1.php">
                    Booking
                </a>
        </div>
        <div class="flex items-center space-x-4">
            <a class="text-gray-700" href="#">
                <i class="fas fa-bell">
                </i>
            </a>
            <a class="text-gray-700" href="profile.php">
                    <i class="fas fa-user">
                    </i>
            </a>
            <a class="text-gray-700" href="#">
                <i class="fas fa-edit">
                </i>
            </a>
        </div>
    </div>
    <div class="md:hidden flex flex-col items-start px-4 py-4 space-y-2">
        <a class="text-gray-700" href="#">
            Home
        </a>
        <a class="text-gray-700" href="#">
            About
        </a>
        <a class="text-gray-700" href="#">
            Rooms
        </a>
        <a class="text-blue-500" href="#">
            Services
        </a>
        <a class="text-gray-700" href="#">
            Contact Us
        </a>
        <a class="text-gray-700" href="#">
            Booking
        </a>
    </div>
</header>

    <!-- Services Section -->
<div class="container mx-auto px-6 py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach ($datapemesanan as $K): ?>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="pictures/<?php echo $K["gambar_fasilitas"]; ?>" class="w-full h-48 object-cover" title="<?php echo $K['gambar_fasilitas']; ?>" alt="Room with a bed and a large window">
                <div class="p-4">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <i class="fas fa-star text-yellow-500"></i>
                        </div>
                        <i class="far fa-heart text-gray-400"></i>
                    </div>
                    <h3 class="mt-2 text-lg font-medium text-gray-800">
                        <?php echo $K['fasilitas']; ?>
                    </h3>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

   
</body>

</html>