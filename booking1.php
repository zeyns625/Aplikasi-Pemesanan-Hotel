<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>
<html>
<head>
    <title>Booking Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50">
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
                <a class="text-gray-700" href="service.php">
                    Services
                </a>
                <a class="text-gray-700" href="contact.php">
                    Contact Us
                </a>
                <a class="text-blue-500" href="booking1.php">
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
        <div class="md:hidden flex flex-col items-start px-4 py-4 space-y-2">
            <a class="text-blue-500" href="#">
                Home
            </a>
            <a class="text-gray-700" href="#">
                About
            </a>
            <a class="text-gray-700" href="#">
                Rooms
            </a>
            <a class="text-gray-700" href="#">
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

    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold text-center">Booking Details</h1>
        </div>
        <div class="bg-white shadow-md rounded-lg p-8 mt-10 max-w-lg mx-auto">
            <h2 class="text-2xl font-bold text-center mb-6">Your Personal Information</h2>

            <form action="cek_booking.php" method="post" autocomplete="off" enctype="multipart/form-data">
                <div class="mb-4">
                    <label class="block text-gray-700">Nama Pemesan</label>
                    <input type="text" name="nama_pemesan" class="w-full mt-2 p-2 border border-gray-300 rounded-md">
                        
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">No HP</label>
                    <input type="text" name="no_hp" class="w-full mt-2 p-2 border border-gray-300 rounded-md">
                        
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Email</label>
                    <input type="text" name="email" class="w-full mt-2 p-2 border border-gray-300 rounded-md">
                        
                </div>
                <div class="flex space-x-4 mb-4">
                    <div class="w-1/2">
                        <label class="block text-gray-700">Check-In</label>
                        <input type="date" name="check_in" class="w-full mt-2 p-2 border border-gray-300 rounded-md">
                    </div>
                    <div class="w-1/2">
                        <label class="block text-gray-700">Check-out</label>
                        <input type="date" name="check_out"class="w-full mt-2 p-2 border border-gray-300 rounded-md">
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Jumlah Kamar</label>
                    <input type="text" name="jumlah_kamar" class="w-full mt-2 p-2 border border-gray-300 rounded-md">
                        
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Jenis Kamar</label>
                    <input type="text" name="jenis_kamar" class="w-full mt-2 p-2 border border-gray-300 rounded-md">
                        
                </div>
                <div class="text-center">
                <button type="submit"name="proses" value="upload" class="bg-blue-600 text-white px-4 py-2 rounded-md">Booking</button>
                    </button>
                </div>  

            </form>
        </div>
    </div>
</body>

</html>