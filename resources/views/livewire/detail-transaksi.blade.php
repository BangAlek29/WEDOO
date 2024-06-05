<div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-6xl m-auto">
    <div class="mb-6 text-center">
        <p class="text-sm text-gray-800"><strong>No Transaksi:</strong> 23001 </p>
        <p class="text-sm text-gray-800"><strong>Tanggal Transaksi:</strong> test</p>
        <p class="text-sm text-gray-800"><strong>Nama Pengantin Pria:</strong> David</p>
        <p class="text-sm text-gray-800"><strong>Nama Pengantin Wanita:</strong> Putri</p>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">List Pembelian</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Keterangan</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kontak</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Harga</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($vendor as $v)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Mobil</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $v->mobil->nama_mobil ?? 'N/A' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $v->mobil->kontak ?? 'N/A' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp. {{ $v->mobil->harga ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Venue</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $v->venue->gedung->nama_gedung ?? 'N/A' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $v->venue->kontak ?? 'N/A' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp. {{ $v->venue->biaya ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Akomodasi</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $v->akomodasi->nama ?? 'N/A' }} </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $v->akomodasi->kontak ?? 'N/A' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp. {{ $v->akomodasi->biaya ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Dokumentasi</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $v->dokumentasi->nama ?? 'N/A' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $v->dokumentasi->kontak ?? 'N/A' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp. {{ $v->dokumentasi->biaya ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Catering</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $v->catering->nama ?? 'N/A' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $v->catering->kontak ?? 'N/A' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp. {{ $v->catering->biaya ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Enteritainment</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $v->entertainment->nama ?? 'N/A' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $v->entertainment->kontak ?? 'N/A' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp. {{ $v->entertainment->biaya ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Perias</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $v->Perias->nama ?? 'N/A' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $v->Perias->kontak ?? 'N/A' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp. {{ $v->Perias->biaya ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Souvenir</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $v->Souvenir->nama ?? 'N/A' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $v->Souvenir->kontak ?? 'N/A' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp. {{ $v->Souvenir->harga ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">MC</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $v->MC->nama ?? 'N/A' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $v->MC->kontak ?? 'N/A' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp. {{ $v->MC->biaya ?? 'N/A' }}</td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-6 flex justify-between items-center border-t border-gray-200 pt-4">
        <p class="text-lg font-semibold text-gray-900">Sub Total</p>
        <p class="text-lg font-semibold text-gray-900">Rp. {{ number_format($vendor->sum('price'), 2, ',', '.') }}</p>
    </div>

    <div class="mt-6 flex justify-end">
        <button onclick="window.history.back();" class="bg-rose-500 text-white px-4 py-2 rounded-lg shadow hover:bg-gray-400">
            Back
        </button>
    </div>
</div>
