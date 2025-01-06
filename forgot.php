

<html>

<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-center text-2xl font-semibold mb-6">Forgot Password</h2>
        <form action="cek_forgot.php" method="post">
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="email">Email:</label>
                <input
                    class="w-full px-3 py-2 border border-blue-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500"
                    type="email" id="email" name="email">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="password">Password:</label>
                <input
                    class="w-full px-3 py-2 border border-blue-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500"
                    type="password" id="password" name="password">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 mb-2" for="confirm-password">Confirm Password:</label>
                <input
                    class="w-full px-3 py-2 border border-blue-300 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500"
                    type="password" id="confirm-password" name="confirm-password">
            </div>  
            <div class="text-center">
                <button
                    class="w-full bg-blue-500 text-white py-2 rounded-full hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Confirm</button>
            </div>
        </form>
    </div>
</body>

</html>