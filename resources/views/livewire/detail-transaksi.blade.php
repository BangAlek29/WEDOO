<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-6xl m-auto">
        <div class="mb-6 text-center">
            <p class="text-sm text-gray-800"><strong>No Transaksi:</strong> E202487</p>
            <p class="text-sm text-gray-800"><strong>Tanggal Transaksi:</strong> 24 Mei 20204</p>
            <p class="text-sm text-gray-800"><strong>Tanggal Acara:</strong> 24 Mei 20204</p>
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
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Nama Vendor</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">DzikriDOr</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">087824981627</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp. 1,000,000.00</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Nama Mobil</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Alphard</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">087824981627</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp. 500,000,000.00</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Tim Pesta</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">DzikiParty</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">087824981627</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp. 2,000,000.00</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Tim Akor dan Dekor</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Dzikri</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">087824981627</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp. 1,500,000.00</td>
                    </tr>
                    <!-- for each tiap komponen wae jik -->
                </tbody>
            </table>
        </div>

        <div class="mt-6 flex justify-between items-center border-t border-gray-200 pt-4">
            <p class="text-lg font-semibold text-gray-900">Sub Total</p>
            <p class="text-lg font-semibold text-gray-900">Rp. 15,000,000.00</p>
        </div>

        <div class="mt-6 flex justify-end">
            <button class="bg-rose-500 text-white px-4 py-2 rounded-lg shadow hover:bg-gray-400">
                Back
            </button>
        </div>
    </div>

</body>
</html>
