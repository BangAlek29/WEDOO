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
                    <li><a href="#" class="text-black hover:text-gray-700">HOME</a></li>
                    <li><a href="/transaksi" class="text-gray-400 hover:text-gray-700">TRANSAKSI</a></li>
                    <li><a href="/contact" class="text-gray-400 hover:text-gray-700">CONTACT</a></li>
                    <li><a href="/login" class="text-gray-400 hover:text-gray-700">LOGIN</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- hero section -->
    <section>
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
        <div class="relative h-48 overflow-hidden rounded-lg sm:h-40 lg:order-last lg:h-full">
            <img
            alt=""
            src="https://images.unsplash.com/photo-1527529482837-4698179dc6ce?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
            class="absolute inset-0 h-full w-full object-cover"
            />
        </div>

        <div class="lg:py-2">
            <h2 class="text-3xl font-bold sm:text-4xl">MERIAHKAN ACARAMU!</h2>

            <p class="mt-4 text-gray-600">
            Selamat datang di <span class="font-bold">WEDOO</span>, di mana impian pernikahan Anda menjadi kenyataan. 
            Kami memahami bahwa setiap pasangan memiliki cerita unik dan visi yang berbeda untuk hari istimewanya. 
            Dengan tim profesional yang berpengalaman dan dedikasi penuh, kami siap untuk menghadirkan pernikahan yang tidak hanya elegan dan menakjubkan, 
            tetapi juga mencerminkan kepribadian dan keinginan Anda. Dari konsep kreatif hingga detail-detail terkecil, kami memastikan semuanya sempurna, sehingga Anda bisa menikmati setiap momen tanpa khawatir. 
            Mari wujudkan pernikahan impian Anda bersama kami, di mana cinta dan keajaiban bertemu.
            </p>

            <a
            href="#vendor"
            class="mt-8 inline-block rounded bg-indigo-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-yellow-400"
            >
            AYO CARI VENDORMU!  &#8595;
            </a>
        </div>
        </div>
    </div>
    </section>
    <!-- end hero section -->

    <!-- divider -->
    <span class="flex items-center mt-10 mb-4" id = "vendor">
        <span class="h-px flex-1 bg-black"></span>
        <span class="shrink-0 px-6">VENDOR-VENDOR</span>
        <span class="h-px flex-1 bg-black"></span>
    </span>

    <!-- pemilihan vendor -->
    <div class="grid grid-cols-3">
        <a href="#vendor1" class="group relative block bg-black">
            <img
                alt=""
                src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50"
            />

            <div class="relative p-4 sm:p-6 lg:p-8">
                <p class="text-sm font-medium uppercase tracking-widest text-pink-500">VENDOR 1</p>

                <p class="text-xl font-bold text-white sm:text-2xl">Blossom Bliss</p>

                <div class="mt-32 sm:mt-48 lg:mt-64">
                <div
                    class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100"
                >
                    <p class="text-sm text-white">
                    Rangkaian bunga dan dekorasi mewah dari Flora & Finesse. Percayakan kami untuk menghadirkan suasana yang memukau di hari istimewa Anda!
                    </p>
                </div>
                </div>
            </div>
        </a>
        <a href="#vendor2" class="group relative block bg-black">
            <img
                alt=""
                src="https://images.unsplash.com/photo-1550784718-990c6de52adf?q=80&w=1368&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50"
            />

            <div class="relative p-4 sm:p-6 lg:p-8">
                <p class="text-sm font-medium uppercase tracking-widest text-pink-500">VENDOR 2</p>

                <p class="text-xl font-bold text-white sm:text-2xl">Forever Frames</p>

                <div class="mt-32 sm:mt-48 lg:mt-64">
                <div
                    class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100"
                >
                    <p class="text-sm text-white">
                    Abadikan setiap momen berharga dengan Eternal Moments. Tim fotografer profesional kami siap menangkap keindahan dan emosi dari setiap detik pernikahan Anda. 
                    </p>
                </div>
                </div>
            </div>
        </a>
        <a href="#vendor3" class="group relative block bg-black">
            <img
                alt=""
                src="https://images.unsplash.com/photo-1607861884586-c7cfaed16290?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTl8fHdlZGRpbmd8ZW58MHx8MHx8fDA%3D"
                class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50"
            />

            <div class="relative p-4 sm:p-6 lg:p-8">
                <p class="text-sm font-medium uppercase tracking-widest text-pink-500">VENDOR 3</p>

                <p class="text-xl font-bold text-white sm:text-2xl">Savory Celebrations</p>

                <div class="mt-32 sm:mt-48 lg:mt-64">
                <div
                    class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100"
                >
                    <p class="text-sm text-white">
                    Nikmati kelezatan hidangan yang tak terlupakan dengan Gourmet Delights. 
                    Kami menyajikan berbagai pilihan menu yang lezat dan berkualitas tinggi.
                    </p>
                </div>
                </div>
            </div>
        </a>
    </div>
    <!-- end pemilihan vendor -->
    <span class="flex items-center mt-10 mb-4" id = "vendor">
        <span class="h-px flex-1 bg-black"></span>
        <span class="shrink-0 px-6">ANY ISSUE?</span>
        <span class="h-px flex-1 bg-black"></span>
    </span>
    <!-- footer -->
    <footer class="bg-rose-500">
        <div class="mx-auto max-w-screen-xl space-y-8 px-4 py-16 sm:px-6 lg:space-y-16 lg:px-8">
            <div class="sm:flex sm:items-center sm:justify-between">
            <div class="text-teal-600 text-lg font-extrabold">
                WEDOO
            </div>

            <ul class="mt-8 flex justify-start gap-6 sm:mt-0 sm:justify-end">

                <li>
                <a
                    href="#"
                    rel="noreferrer"
                    target="_blank"
                    class="text-gray-700 transition hover:opacity-75"
                >
                    <span class="sr-only">Instagram</span>

                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                        fill-rule="evenodd"
                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                        clip-rule="evenodd"
                    />
                    </svg>
                </a>
                </li>

                <li>
                <a
                    href="#"
                    rel="noreferrer"
                    target="_blank"
                    class="text-gray-700 transition hover:opacity-75"
                >
                    <span class="sr-only">Twitter</span>

                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
                    />
                    </svg>
                </a>
                </li>

                <li>
                <a
                    href="#"
                    rel="noreferrer"
                    target="_blank"
                    class="text-gray-700 transition hover:opacity-75"
                >
                    <span class="sr-only">GitHub</span>

                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                        fill-rule="evenodd"
                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                        clip-rule="evenodd"
                    />
                    </svg>
                </a>
                </li>

                <li>
                <a
                    href="#"
                    rel="noreferrer"
                    target="_blank"
                    class="text-gray-700 transition hover:opacity-75"
                >
                    <span class="sr-only">Dribbble</span>

                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                        fill-rule="evenodd"
                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                        clip-rule="evenodd"
                    />
                    </svg>
                </a>
                </li>
            </ul>
            </div>

            <div
            class="grid grid-cols-1 gap-8 border-t border-gray-100 pt-8 sm:grid-cols-2 lg:grid-cols-4 lg:pt-16"
            >
            <div>
                <p class="font-medium text-gray-900">Services</p>

                <ul class="mt-6 space-y-4 text-sm">
                <li>
                    <a href="#" class="text-gray-700 transition hover:opacity-75"> Accounts Review </a>
                </li>

                <li>
                    <a href="#" class="text-gray-700 transition hover:opacity-75"> HR Consulting </a>
                </li>

                <li>
                    <a href="#" class="text-gray-700 transition hover:opacity-75"> SEO Optimisation </a>
                </li>
                </ul>
            </div>

            <div>
                <p class="font-medium text-gray-900">Company</p>

                <ul class="mt-6 space-y-4 text-sm">
                <li>
                    <a href="#" class="text-gray-700 transition hover:opacity-75"> About </a>
                </li>

                <li>
                    <a href="#" class="text-gray-700 transition hover:opacity-75"> Meet the Team </a>
                </li>

                <li>
                    <a href="#" class="text-gray-700 transition hover:opacity-75"> Accounts Review </a>
                </li>
                </ul>
            </div>

            <div>
                <p class="font-medium text-gray-900">Helpful Links</p>

                <ul class="mt-6 space-y-4 text-sm">
                <li>
                    <a href="#" class="text-gray-700 transition hover:opacity-75"> Contact </a>
                </li>

                <li>
                    <a href="#" class="text-gray-700 transition hover:opacity-75"> FAQs </a>
                </li>

                <li>
                    <a href="#" class="text-gray-700 transition hover:opacity-75"> Live Chat </a>
                </li>
                </ul>
            </div>

            <div>
                <p class="font-medium text-gray-900">Legal</p>

                <ul class="mt-6 space-y-4 text-sm">
                <li>
                    <a href="#" class="text-gray-700 transition hover:opacity-75"> Accessibility </a>
                </li>

                <li>
                    <a href="#" class="text-gray-700 transition hover:opacity-75"> Returns Policy </a>
                </li>

                <li>
                    <a href="#" class="text-gray-700 transition hover:opacity-75"> Refund Policy </a>
                </li>

                <li>
                    <a href="#" class="text-gray-700 transition hover:opacity-75"> Hiring Statistics </a>
                </li>
                </ul>
            </div>
            </div>

            <p class="text-xs text-gray-500">&copy; 2023. WEDOO. All rights reserved.</p>
        </div>
    </footer>  
    <!-- end footer -->
</body>
</html>
