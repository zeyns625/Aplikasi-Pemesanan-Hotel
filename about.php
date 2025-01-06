<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>about</title>

    <script src="https://cdn.tailwindcss.com"> </script>  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body class="bg-white text-gray-800">
    <!-- Navigation -->
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="hidden md:flex flex-1 justify-center space-x-6">
                  <a class="text-gray-700" href="index.php">
                    Home
                </a>
                <a class="text-blue-500" href="about.php">
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
                <a class="text-gray-700" href="booking1.php">
                    Booking
                </a>
            </div>
            <div class="flex items-center space-x-4">
                <a class="text-gray-700" href="#">
                    <i class="fas fa-bell">
                    </i>
                </a>
                <a class="text-gray-700" href="profile.php">
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
    <!-- Hero Section -->
    <section class="flex justify-center items-center py-16 bg-gray-100">
        <div
            class="max-w-6xl mx-auto flex flex-col md:flex-row items-center bg-white shadow-lg rounded-lg overflow-hidden">
            <img alt="Image of a luxurious hotel with a pool" class="w-full md:w-1/2 h-full object-cover" height="400"
                src="https://storage.googleapis.com/a1aa/image/uEM8JyxoGY45PRzxhFMbLW42CuG2Rn3YztEqbD8W9FrFOk6E.jpg"
                width="600" />
            <div class="p-8 md:w-1/2">
                <h2 class="text-2xl font-bold mb-4">
                    Discover our History
                </h2>
                <p class="text-gray-600 mb-4">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's
                </p>
                <p class="text-gray-600 mb-4">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>
                <a class="inline-block bg-blue-500 text-white px-6 py-2 rounded-full" href="#">
                    Explore More
                </a>
            </div>
        </div>
    </section>
    <!-- About Page Section -->
    <section class="py-16">
        <div class="max-w-6xl mx-auto px-8">
            <h2 class="text-2xl font-bold text-gray-600 mb-8">
                About Page
            </h2>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col md:flex-row items-center">
                <div class="p-8 md:w-2/3">
                    <p class="text-gray-600 mb-4">
                        <i class="fas fa-quote-left text-green-500">
                        </i>
                        Meskipun Terlambat, Selamat Atas Pernikahanmu Na Hee Do.
                        <i class="fas fa-quote-right text-green-500">
                        </i>
                    </p>
                    <p class="font-bold">
                        Baek Yi Jin
                    </p>
                    <p class="text-gray-500">
                        Reporter
                    </p>
                </div>
                <img alt="Portrait of Wayan Agus Suartama, a Ambativasi" class="w-full md:w-1/3 h-full object-cover"
                    height="200"
                    src="https://i.pinimg.com/736x/1b/65/2d/1b652dea14e306c0cbfef0f51c2aa45a.jpg"
                    width="200" />
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="bg-gray-900 text-white p-9">
        <div class="grid grid-cols- sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div>
                <h3 class="font-bold mb-2">About us</h3>
                <ul>
                    <li><a href="#" class="hover:underline">Contact</a></li>
                    <li><a href="#" class="hover:underline">Location</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold mb-2">FAQ</h3>
                <ul>
                    <li><a href="#" class="hover:underline">Term of Use</a></li>
                    <li><a href="#" class="hover:underline">Privacy Police</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold mb-2">Services & Facilities</h3>
                <ul>
                    <li><a href="#" class="hover:underline">Careers</a></li>
                    <li><a href="#" class="hover:underline">How to book</a></li>
                </ul>
            </div>
            <div class="flex items-center justify-center">
                <h1 class="text-4xl font-bold">Hotel <span class="text-blue-500">Jaya</span></h1>
            </div>
        </div>
    </footer>
</body>

</html>