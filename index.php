<html>

<head>
    <title>Home</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex 
        justify-between items-center">
            <div class="hidden md:flex flex-1 justify-center space-x-6">
            <a class="text-blue-500" href="index.php">
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
    <!-- Booking Section -->
    <section class="bg-blue-50 py-12">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-2xl font-semibold mb-2">
                Booking Rooms
            </h2>
            <p class="text-gray-600 mb-6">
                Your most comfortable place to stay
            </p>
            <div class="bg-white rounded-lg shadow p-6 inline-block">
                <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-4 mb-4">
                    <div>
                        <label class="block text-gray-700 mb-2">
                            Date
                        </label>
                        <input class="bg-gray-100 border border-gray-300 rounded px-4 py-2" type="date" />
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">
                            Person
                        </label>
                        <div class="flex space-x-2">
                            <div class="flex items-center border border-gray-300 rounded px-4 py-2">
                                <span class="mr-2">
                                    Adults
                                </span>
                                <select class="bg-transparent">
                                    <option>
                                        2
                                    </option>
                                    <option>
                                        1
                                    </option>
                                    <option>
                                        3
                                    </option>
                                </select>
                            </div>
                            <div class="flex items-center border border-gray-300 rounded px-4 py-2">
                                <span class="mr-2">
                                    Children
                                </span>
                                <select class="bg-transparent">
                                    <option>
                                        0
                                    </option>
                                    <option>
                                        1
                                    </option>
                                    <option>
                                        2
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button class="bg-blue-500 text-white rounded px-6 py-2">
                        Booking
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose Us Section -->
    <section class="py-12">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-2xl font-semibold mb-2">
                Why Choose Us
            </h2>
            <p class="text-gray-600 mb-6">
                The main reason is because our competitors have disgusting sites, but we can't write that here, so the
                text here will be different
            </p>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="bg-blue-100 rounded-full p-4 inline-block mb-4">
                        <i class="fas fa-credit-card text-blue-500 text-2xl">
                        </i>
                    </div>
                    <h3 class="font-semibold mb-2">
                        Payment methods
                    </h3>
                    <p class="text-gray-600">
                        We have a lot of them, from cryptocurrencies to barter for potatoes
                    </p>
                </div>
                <div class="text-center">
                    <div class="bg-blue-100 rounded-full p-4 inline-block mb-4">
                        <i class="fas fa-search text-blue-500 text-2xl">
                        </i>
                    </div>
                    <h3 class="font-semibold mb-2">
                        Simple search process
                    </h3>
                    <p class="text-gray-600">
                        We checked it out, even the kid did it, but it was my mom's friend's son
                    </p>
                </div>
                <div class="text-center">
                    <div class="bg-blue-100 rounded-full p-4 inline-block mb-4">
                        <i class="fas fa-headset text-blue-500 text-2xl">
                        </i>
                    </div>
                    <h3 class="font-semibold mb-2">
                        24/7 Support
                    </h3>
                    <p class="text-gray-600">
                        Is there something you don't understand? Feel free to call us. Phone number in the footer
                    </p>
                </div>
                <div class="text-center">
                    <div class="bg-blue-100 rounded-full p-4 inline-block mb-4">
                        <i class="fas fa-smile text-blue-500 text-2xl">
                        </i>
                    </div>
                    <h3 class="font-semibold mb-2">
                        We are nice
                    </h3>
                    <p class="text-gray-600">
                        Fantasy is over, there will be something really convincing here
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Reviews Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-2xl font-semibold mb-6">
                Reviews
            </h2>
            <div class="flex justify-center space-x-4 mb-6">
                <button class="text-gray-500">
                    <i class="fas fa-chevron-left">
                    </i>
                </button>
                <div class="flex space-x-4 overflow-x-auto">
                    <div class="bg-gray-100 rounded-lg p-4 text-left min-w-[250px]">
                        <div class="flex items-center mb-4">
                            <img alt="Person 1" class="rounded-full w-12 h-12 mr-4" height="50"
                                src="https://storage.googleapis.com/a1aa/image/FluvvlMZR044PBWFkfsdV8s20VMHcRd8T5nliZWqMwPgGI1JA.jpg"
                                width="50" />
                            <div>
                                <p class="font-semibold">
                                    Jannike Borg, Publisher
                                </p>
                            </div>
                        </div>
                        <p class="text-gray-600">
                            I quickly found the right tour for me, but I had a few questions about the hotel. I wrote to
                            the support and they answered all my questions within an hour. The vacation itself was
                            perfect. Thank you very much. I will come back again and again.
                        </p>
                    </div>
                    <div class="bg-gray-100 rounded-lg p-4 text-left min-w-[250px]">
                        <div class="flex items-center mb-4">
                            <img alt="Person 2" class="rounded-full w-12 h-12 mr-4" height="50"
                                src="https://storage.googleapis.com/a1aa/image/DfiAr0LBlj3xRyvp1YFJpfgOWBW82LCs5PAlwvlqfapGWgUnA.jpg"
                                width="50" />
                            <div>
                                <p class="font-semibold">
                                    LeBron Durant, Flight attendant
                                </p>
                            </div>
                        </div>
                        <p class="text-gray-600">
                            I quickly found the right tour for me, but I had a few questions about the hotel. I wrote to
                            the support and they answered all my questions within an hour. The vacation itself was
                            perfect. Thank you very much. I will come back again and again.
                        </p>
                    </div>
                    <div class="bg-gray-100 rounded-lg p-4 text-left min-w-[250px]">
                        <div class="flex items-center mb-4">
                            <img alt="Person 3" class="rounded-full w-12 h-12 mr-4" height="50"
                                src="https://storage.googleapis.com/a1aa/image/pzEJV1FZjf39bSkx1mOxxd8MfdKmYjGvYGa39CMK33OGLQqTA.jpg"
                                width="50" />
                            <div>
                                <p class="font-semibold">
                                    Kaori Ahn, Chiropodist
                                </p>
                            </div>
                        </div>
                        <p class="text-gray-600">
                            I quickly found the right tour for me, but I had a few questions about the hotel. I wrote to
                            the support and they answered all my questions within an hour. The vacation itself was
                            perfect. Thank you very much. I will come back again and again.
                        </p>
                    </div>
                </div>
                <button class="text-gray-500">
                    <i class="fas fa-chevron-right">
                    </i>
                </button>
            </div>
            <button class="bg-blue-500 text-white rounded px-6 py-2">
                More reviews
            </button>
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