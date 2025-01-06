<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login_admin.php');
    exit();
}
$role = $_SESSION['role'];
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
            
            <?php if ($role == 'admin'): ?>
            <div class="text-white mb-4">
                <a href="admin_fasilitas.php" class="flex items-center">
                    <i class="fas fa-bed mr-2"></i> Fasilitas Hotel
                </a>
            </div>

            <?php if ($role === 'resepsionis' ||  $role === 'admin'): ?>
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
        <div class="w-full md:w-3/4 p-8">
            <div class="flex justify-between items-center mb-8 bg-gray-200 p-4 rounded">
                <div class="text-2xl font-semibold">Dashboard</div>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-500"><i class="fas fa-bell"></i></a>
                    <a href="profile_admin.php" class="text-gray-500"><i class="fas fa-user"></i></a>
                    <a href="#" class="text-gray-500"><i class="fas fa-edit"></i></a>
                </div>
            </div>

            <div class="text-3xl font-bold mb-4">Petugas | JAYA HOTEL</div>
            <div class="text-xl font-semibold mb-8">Jumlah Kamar Tersedia</div>
            <div class="grid grid-cols-3 gap-4">
                <div class="text-center">
                    <div class="bg-blue-200 h-24 w-8 mx-auto mb-2"></div>
                    <div class="bg-blue-400 h-12 w-8 mx-auto mb-2"></div>
                    <div class="bg-purple-500 h-8 w-8 mx-auto"></div>
                    <div class="mt-2">17</div>
                </div>

                <div class="text-center">
                    <div class="bg-blue-200 h-24 w-8 mx-auto mb-2"></div>
                    <div class="bg-blue-400 h-12 w-8 mx-auto mb-2"></div>
                    <div class="bg-purple-500 h-8 w-8 mx-auto"></div>
                    <div class="mt-2">18</div>
                </div>

                <div class="text-center">
                    <div class="bg-blue-200 h-24 w-8 mx-auto mb-2"></div>
                    <div class="bg-blue-400 h-12 w-8 mx-auto mb-2"></div>
                    <div class="bg-purple-500 h-8 w-8 mx-auto"></div>
                    <div class="mt-2">19</div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>