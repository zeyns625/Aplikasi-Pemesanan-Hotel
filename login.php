<?php
session_start();
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM customer WHERE username = '$username'";
  $result = mysqli_query($koneksi, $query);
  $user = mysqli_fetch_assoc($result);

  if ($user && password_verify($password, $user['password'])) {
    $_SESSION['username'] = $user['username'];
    header("Location: index.php");
    exit();
  } else {
    $error = "Username and password salah.";
  
}
}
?>

<html>

<head>
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body class="bg-blue-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold text-center mb-6">Login!</h1>
        <form action="" method="post">
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="username">Username:</label>
                <input
                    class="w-full px-3 py-2 border border-blue-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500"
                    type="text" id="username" name="username">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="password">Password:</label>
                <input
                    class="w-full px-3 py-2 border border-blue-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500"
                    type="password" id="password" name="password">
            </div>
            <div class="flex justify-end mb-4">
                <a href="forgot.php" class="text-blue-500 text-sm">Forgot Password?</a>
            </div>
            <div class="mb-6">
                <button
                    class="w-full bg-blue-500 text-white py-2 rounded-full hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Login</button>
            </div>
            <div class="text-center">
                <p class="text-gray-700 text-sm">Dont have an account? <a href="registrasi.php" class="text-blue-500">Register</a></p>
            </div>
        </form>
    </div>
</body>

</html>