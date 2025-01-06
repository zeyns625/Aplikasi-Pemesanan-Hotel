<?php
session_start();
include 'koneksi.php'; // Pastikan koneksi ke database sudah ada

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login_admin.php"); // Redirect ke halaman login jika belum login
    exit();
}

// Ambil data pengguna dari database
$username = $_SESSION['username'];
$stmt = $koneksi->prepare("SELECT * FROM petugas WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$userData = $result->fetch_assoc();

if (!$userData) {
    header("Location: login_admin.php");
    exit();
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="bg-gray-100">
    <div class="flex flex-col md:flex-row">

        <!-- Sidebar -->
        <div class="w-full md:w-1/4 bg-blue-500 h-auto md:h-screen p-4">
            <div class="text-white text-2xl font-bold mb-8 border-b border-white pb-2">JAYA HOTEL</div>
            <div class="text-white text-xl font-semibold mb-4 border-b border-white pb-2">Resepsionis</div>
            <div class="text-white mb-4 pb-2">
                <a href="dash_rsp.php" class="flex items-center">
                    <i class="fas fa-home mr-2"></i> Dashboard
                </a>
            </div>
            <div class="text-white mb-4">
                <a href="rsp_data.php" class="flex items-center">
                    <i class="fas fa-bed mr-2"></i> Reservasi
                </a>
            </div>
            <div class="text-white">
                <a href="logout_rsp.php" class="flex items-center">
                    <i class="fas fa-lock mr-2"></i> Log Out
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="w-full md:w-3/4 p-8">
            <div class="text-3xl font-bold mb-4">Profile | Resepsionis | JAYA HOTEL</div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-gray-200 rounded-full"></div>
                    <div class="ml-4">
                        <span class="font-semibold"><?php echo $userData['nama_petugas']; ?></span>
                        <div class="text-gray-500 text-sm"><?php echo $userData['username']; ?></div>
                    </div>
                </div>
                <div class="flex items-center justify-between mb-2">
                    <span class="font-semibold">Role:</span>
                    <span><?php echo $userData['role']; ?></span>
                </div>

            <!-- Konten Dashboard Berdasarkan Role -->
            <div class="mt-10">
                <?php if ($userData['role'] === 'administrator'): ?>
                    <h2 class="text-xl font-semibold">Admin Dashboard</h2>
                    <p>Welcome to the resepsionis dashboard. Here you can manage appointments and view client information.</p>
                    <!-- Add resepsionis-specific content here -->
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>