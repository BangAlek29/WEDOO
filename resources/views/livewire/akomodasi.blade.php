<div style="padding-left: 250px;">
    <section class="px-8 py-0">
        <div class="mt-0">
          <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
    @foreach ($akomodasis as $akomodasi)
    <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md border border-blue-gray-100">
        <div class="relative bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none !m-0 p-6">
            <h5 class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-blue-gray-900 capitalize">{{ $akomodasi->nama }}</h5>
            <p class="block antialiased font-sans text-sm leading-normal text-inherit font-normal !text-gray-500">{{ $akomodasi->kontak }}</p>
            <h3 class="antialiased tracking-normal font-sans text-3xl font-semibold leading-snug text-blue-gray-900 flex gap-1 mt-4">Harga : Rp.{{ $akomodasi->biaya }}<span class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900 -translate-y-0.5 self-end opacity-70"></span></h3>
        </div>
        <div class="p-6 border-t border-blue-gray-50">
            <ul class="flex flex-col gap-3">
                <li class="flex items-center gap-3 text-gray-700">
                    <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">Deskripsi :</p>
                </li>
                <li class="flex items-center gap-3 text-gray-700">
                    <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">{{ $akomodasi->deskripsi }}</p>
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
