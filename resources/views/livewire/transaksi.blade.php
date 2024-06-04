<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEDOO</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .navbar-bg {
            background-color: #D9D9D9; /* Light grey color */
        }
    </style>
</head>
<body class="bg-pink-100">
    <!-- Navbar start -->
    <nav class="navbar-bg sticky top-0 z-50 w-full p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <div class="text-3xl font-bold text-black mr-6">
                    WEDOO!
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <ul class="hidden md:flex space-x-6 text-lg">
                    <li><a href="/" class="text-gray-400 hover:text-gray-700">HOME</a></li>
                    <li><a href="/transaksi" class="text-black hover:text-gray-700">TRANSAKSI</a></li>
                    <li><a href="/contact" class="text-gray-400 hover:text-gray-700">CONTACT</a></li>
                    <li><a href="/login" class="text-gray-400 hover:text-gray-700">LOGIN</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- isi transaksi -->
    <div class="card-container">
    <article class="max-w-full mx-auto overflow-hidden rounded-lg shadow transition hover:shadow-lg mt-4 bg-white">
        <div class="flex">
            <img    
                alt=""
                src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                class="h-56 object-cover"
            />
            <div class="flex-grow p-4 sm:p-6">
                <time datetime="2022-10-10" class="block text-xs text-gray-500"> 10th Oct 2022 </time>
                <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                    pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
                    mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
                    dignissimos. Molestias explicabo corporis voluptatem?
                </p>
            </div>
        </div>
        <div class="flex justify-end p-4 sm:p-6">
            <a href="#"
                class="inline-block mt-2 rounded bg-indigo-600 px-4 py-2 text-lg font-medium
                text-white transition hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-yellow-400">
                PESANAN MU
            </a>
        </div>
    </article>
</div>

    <!-- end transaksi -->
</body>
</html>
