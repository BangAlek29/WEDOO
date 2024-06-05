<div>
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-6xl m-auto">
        <div class="mb-6 text-center">
            <p class="text-sm text-gray-800"><strong>No Transaksi:</strong> {{ $transaction->id_transaksi }}</p>
            <p class="text-sm text-gray-800"><strong>Tanggal Transaksi:</strong> {{ $transaction->tgl_transaksi }}</p>
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
                    @foreach ($transaction->vendors as $vendor)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $vendor->nama }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $vendor->description }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $vendor->contact }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp. {{ number_format($vendor->price, 2, ',', '.') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-6 flex justify-between items-center border-t border-gray-200 pt-4">
            <p class="text-lg font-semibold text-gray-900">Sub Total</p>
            <p class="text-lg font-semibold text-gray-900">Rp. {{ number_format($transaction->vendors->sum('price'), 2, ',', '.') }}</p>
        </div>

        <div class="mt-6 flex justify-end">
            <button onclick="window.history.back();" class="bg-rose-500 text-white px-4 py-2 rounded-lg shadow hover:bg-gray-400">
                Back
            </button>
        </div>
    </div>
</div>
