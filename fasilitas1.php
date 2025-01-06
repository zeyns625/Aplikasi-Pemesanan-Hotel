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
                <a class="text-gray-700" href="#">
                    <i class="fas fa-user">
                    </i>
                </a>
                <a class="text-gray-700" href="#">
                    <i class="fas fa-edit">
                    </i>
                </a>
            </div>
        </div>
    </header>
    <div class="container mx-auto px-6 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <?php foreach ($datapemesanan as $K):?>
                <img src="pictures/<?php echo $K["gambar_fasilitas"]; ?>"class="w-full h-48 object-cover" height="400" style="float:left;  margin-right: 1em;" width=600 height=400 title="<?php echo $K['gambar_fasilitas']; ?>" alt="Restaurant">
                <div class="p-4">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <i class="fas fa-star text-yellow-500">
                            </i>
                        </div>
                        <i class="far fa-heart text-gray-400">
                        </i>
                    </div>
                    <h3 class="mt-2 text-lg font-medium text-gray-800">
                    <?php echo $K['fasilitas'];?>
                    </h3>

                    </div>
                    <?php endforeach; ?>  
                </div>
                
            

</body>
</html>