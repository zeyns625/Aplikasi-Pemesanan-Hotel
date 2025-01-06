<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-center text-xl font-bold mb-6">Petugas Registration</h2>
        <form action="cek_regis_petugas.php" method="post" autocomplete="off">
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="nama_petugas">Nama Petugas:</label>
                <input class="w-full px-3 py-2 border border-blue-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" id="nama_petugas" name="nama_petugas" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="username">Username:</label>
                <input class="w-full px-3 py-2 border border-blue-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" id="username" name="username" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="password">Password:</label>
                <input class="w-full px-3 py-2 border border-blue-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500" type="password" id="password" name="password" required>
            </div>
            <div class="mb-3">
                            <label for="role" class="form-label">Role</label>
                            <select class="form-select" id="role" name="role" required>
                                <option value="admin">Admin</option>
                                <option value="resepsionis">Resepsionis</option>
                            </select>
                        </div>
            <div class="mb-4">
                <button type="submit" name="proses" value="upload" class="w-full bg-blue-500 text-white py-2 rounded-full hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Register</button>
            </div>
            <div class="text-center">
                <a href="login_petugas.php" class="text-blue-500 hover:underline">Already have an account? Login</a>
            </div>
            
        </form>
    </div>
</body>
</html>