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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="bg-blue-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-6 rounded-lg shadow-lg flex flex-col md:flex-row space-y-6 md:space-y-0 md:space-x-10">
        <!-- Left Card -->
        <div class="bg-white p-6 rounded-lg shadow-lg w-full md:w-64">
            <div class="flex items-center space-x-4 mb-6">
                <div class="w-12 h-12 bg-gray-200 rounded-full"></div>
                <div>
                    <span class="font-semibold">
                        <?php echo $userData['username']; ?>
                    </span>
                </div>
            </div>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-user text-purple-500"></i>
                        <span>My Profile</span>
                    </div>
                    <i class="fas fa-chevron-right text-gray-400"></i>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-bell text-purple-500"></i>
                        <span>Notification</span>
                    </div>
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox text-blue-500" checked>
                        <span class="ml-2 text-gray-500">Allow</span>
                    </label>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <a href="logout.php">
                            <i class="fas fa-sign-out-alt text-purple-500"></i>
                            <span>Log Out</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right Card -->
        <div class="bg-white p-6 rounded-lg shadow-lg w-full md:w-96">
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center space-x-4">
                    <div class="w-12 h-12 bg-gray-200 rounded-full"></div>
                    <div>
                        <span class="font-semibold">
                            <?php echo $userData['username']; ?>
                        </span>
                    
                        <div class="text-gray-500 text-sm">
                            <?php echo $userData['email']; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-4">
                <div class="flex justify-between">
                    <span class="text-gray-500">Name</span>
                    <span class="font-semibold">
                        <?php echo $userData['username']; ?>
                    </span>
                </div>

                <div class="flex justify-between">
                    <span class="text-gray-500">Email account</span>
                    <span class="font-semibold">
                        <?php echo $userData['email']; ?>
                    </span>
                </div>

                <div class="flex justify-between">
                    <span class="text-gray-500">Location</span>
                    <span class="font-semibold">Indonesia</span>
                </div>

            </div>
        </div>
    </div>
</body>

</html>