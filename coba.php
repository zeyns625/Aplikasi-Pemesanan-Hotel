<?php
session_start();
include 'koneksi.php'; // Pastikan koneksi ke database sudah ada

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect ke halaman login jika belum login
    exit();
}

// Ambil data pengguna dari database
$username = $_SESSION['username'];
$stmt = $koneksi->prepare("SELECT * FROM customer WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$userData = $result->fetch_assoc();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full md:w-96">
        <h2 class="text-center text-2xl font-bold mb-6">Profile</h2>
        <div class="space-y-4">
            <div class="flex justify-between">
                <span class="text-gray-500">Name</span>
                <span class="font-semibold">
                    <?php echo $userData['name']; ?>
                </span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-500">Email</span>
                <span class="font-semibold">
                    <?php echo $userData['email']; ?>
                </span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-500">Mobile number</span>
                <span class="font-semibold">
                    <?php echo $userData['no_hp']; ?>
                </span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-500">Location</span>
                <span class="font-semibold">
                    <?php echo $userData['location']; ?>
                </span>
            </div>
        </div>
        <div class="mt-6">
            <button class="bg-blue-500 text-white px-4 py-2 rounded-md w-full">Edit Profile</button>
        </div>
    </div>
</body>

</html>

