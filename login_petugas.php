<?php
session_start();
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM petugas WHERE username = '$username'";
  $result = mysqli_query($koneksi, $query);
  $user = mysqli_fetch_assoc($result);

  if ($user && password_verify($password, $user['password'])) {
    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['role'];
    header("Location: dash_petugas.php");
    exit();
  } else {
    $error = "Username and password salah.";
  
}
}
?>

<html>

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="bg-blue-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-10 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-center text-blue-500 text-2xl mb-6">Login Petugas</h2>
        <p class="text-center text-gray-500 mb-8">Please fill in your unique petugas login details below</p>
        <?php if (isset($error)) : ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <form action="" method="post">
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="username">Username</label>
                <input
                    class="w-full px-4 py-2 border rounded-lg bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    type="text" id="username" name="username">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 mb-2" for="password">Password</label>
                <div class="relative">
                    <input
                        class="w-full px-4 py-2 border rounded-lg bg-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        type="password" id="password" name="password">
                    <span class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-500">
                        <i class="fas fa-eye-slash"></i>
                    </span>
                </div>
            </div>
            <button
                class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Sign
                In</button>

            <div class="text-center">
                <p class="text-gray-700 text-sm">Dont have an account? <a href="registrasi_petugas.php" class="text-blue-500">Register</a></p>
            </div>
        </form>

    </div>

</body>

</html>