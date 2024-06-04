<div style="padding-left: 179px;">
    <section class="px-8 py-0">
      <div class="mt-0">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($mobils as $mobil)
            <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md border border-blue-gray-100">
                <img class="w-full h-auto rounded-t-xl" src="{{ $mobil->image_url }}" alt="Image Description">
                <div class="relative bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none !m-0 p-6">
                    <h5 class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-blue-gray-900 capitalize">{{ $mobil->nama_mobil }}</h5>
                    <p class="block antialiased font-sans text-sm leading-normal text-inherit font-normal !text-gray-500">{{ $mobil->merk }}</p>
                    <h3 class="antialiased tracking-normal font-sans text-3xl font-semibold leading-snug text-blue-gray-900 flex gap-1 mt-4">{{ $mobil->harga }}<span class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900 -translate-y-0.5 self-end opacity-70"></span></h3>
                </div>
                <div class="p-6 border-t border-blue-gray-50">
                    <ul class="flex flex-col gap-3">
                        <li class="flex items-center gap-3 text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-gray-900">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                            </svg>
                            <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">Capacity: {{ $mobil->kapasitas }}</p>
                        </li>
                    </ul>
                    <button class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg border border-green-500 text-green-500 hover:opacity-75 focus:ring focus:ring-green-200 active:opacity-[0.85] block w-full mt-6" type="button">Buy Now</button>
                </div>
            </div>
        @endforeach
        </div>
      </div>
    </section>
  </div>
  