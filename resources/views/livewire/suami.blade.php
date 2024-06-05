<section class="relative flex flex-wrap lg:h-screen lg:items-center">
    <div class="relative h-64 w-full sm:h-96 lg:h-full lg:w-1/2">
      <img
        alt="Wedding"
        src="https://images.unsplash.com/photo-1513084114792-f16740b4f357?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
        class="absolute inset-0 h-full w-full object-cover object-center rounded-lg shadow-lg transform hover:scale-105 transition duration-300 ease-in-out"
      />
    </div>
  
    <div class="w-full px-4 py-12 sm:px-6 sm:py-16 lg:w-1/2 lg:px-8 lg:py-24">
      <div class="mx-auto max-w-lg text-center">
        <h1 class="text-2xl font-bold sm:text-3xl">Data Mempelai Pria</h1>
  
        <p class="mt-4 text-gray-500">
          Silakan isi data lengkap mempelai pria.
        </p>
      </div>
  
      <form action="#" class="mx-auto mb-0 mt-8 max-w-md space-y-4">
        <div>
          <label for="wedding-date" class="block text-sm font-medium text-gray-700">Tanggal Pernikahan</label>
          <input
            type="date"
            id="wedding-date"
            class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm"
            placeholder="Tanggal Pernikahan"
          />
        </div>
  
        <div>
          <label for="guest-count" class="block text-sm font-medium text-gray-700">Jumlah Tamu</label>
          <input
            type="number"
            id="guest-count"
            class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm"
            placeholder="Jumlah Tamu"
          />
        </div>
  
        <div>
          <label for="first-name" class="block text-sm font-medium text-gray-700">First Name</label>
          <input
            type="text"
            id="first-name"
            class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm"
            placeholder="First Name"
          />
        </div>
  
        <div>
          <label for="last-name" class="block text-sm font-medium text-gray-700">Last Name</label>
          <input
            type="text"
            id="last-name"
            class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm"
            placeholder="Last Name"
          />
        </div>
  
        <div>
          <label for="gender" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
          <select
            id="gender"
            class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm"
          >
            <option value="wanita">Wanita</option>
            <option value="pria">Pria</option>
          </select>
        </div>
  
        <div>
          <label for="mother-name" class="block text-sm font-medium text-gray-700">Nama Ibu</label>
          <input
            type="text"
            id="mother-name"
            class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm"
            placeholder="Nama Ibu"
          />
        </div>
  
        <div>
          <label for="father-name" class="block text-sm font-medium text-gray-700">Nama Ayah</label>
          <input
            type="text"
            id="father-name"
            class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm"
            placeholder="Nama Ayah"
          />
        </div>
  
        <div>
          <label for="contact" class="block text-sm font-medium text-gray-700">Kontak</label>
          <input
            type="text"
            id="contact"
            class="w-full rounded-lg border-gray-200 p-4 text-sm shadow-sm"
            placeholder="Kontak"
          />
        </div>
  
        <div class="flex items-center justify-between">
          <button
            type="submit"
            class="inline-block rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white"
          >
            Submit
          </button>
        </div>
      </form>
    </div>
  </section>
  