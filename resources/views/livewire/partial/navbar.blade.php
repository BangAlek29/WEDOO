<div>
  <style>
    .navbar-bg {
      position: relative;
      background-color: #D9D9D9; /* Light grey color */
    }
  </style>

  <!-- Navbar start -->
  <nav class="navbar-bg sticky top-0 z-50 w-full p-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
      <div class="flex items-center">
        <div class="text-3xl font-bold text-black mr-6">
          WEDOO!
        </div>
      </div>

      <!-- Hamburger button -->
      <div class="md:hidden">
        <button id="hamburger-button" class="text-black focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
          </svg>
        </button>
      </div>

      <!-- Navbar links -->
      <ul id="navbar-links" class="hidden md:flex space-x-6 text-lg">
        <li><a href="/" class="text-black hover:text-gray-700">HOME</a></li>
        <li><a href="/transaksi" class="text-gray-400 hover:text-gray-700">TRANSAKSI</a></li>
        <li><a href="/contact" class="text-gray-400 hover:text-gray-700">CONTACT</a></li>
        <li><a href="/login" class="text-gray-400 hover:text-gray-700">LOGIN</a></li>
      </ul>
    </div>
  </nav>
  <!-- Navbar end -->

  <!-- Mobile menu -->
  <div id="mobile-menu" class="md:hidden hidden px-4 py-2 space-y-2">
    <a href="/" class="block text-black hover:text-gray-700">HOME</a>
    <a href="/transaksi" class="block text-gray-400 hover:text-gray-700">TRANSAKSI</a>
    <a href="/contact" class="block text-gray-400 hover:text-gray-700">CONTACT</a>
    <a href="/login" class="block text-gray-400 hover:text-gray-700">LOGIN</a>
  </div>

  <script>
    const hamburgerButton = document.getElementById('hamburger-button');
    const mobileMenu = document.getElementById('mobile-menu');

    hamburgerButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
</div>
