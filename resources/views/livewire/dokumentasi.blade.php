<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:wght@400;700&display=swap" rel="stylesheet">
    <style>

        .style-image {
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;    
}
        .custom-button {
            background-color: #808080;
            color: white; 
            padding: 10px 90px; 
            border: none;
            border-radius: 2px; 
            cursor: pointer; 
            text-align: center; 
            text-decoration: none; 
            display: inline-block; 
            font-size: 16px; 
            transition: background-color 0.3s ease, color 0.3s ease, box-shadow 0.3s ease; 
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); 
        }

        .custom-button:hover {
            background-color: #696969; /* Warna abu-abu yang lebih gelap saat hover */
            color: white; /* Warna teks tetap putih saat hover */
        }

        .custom-button:disabled {
            opacity: 0.5; /* Efek opacity saat disabled */
            cursor: not-allowed; /* Mengubah cursor saat disabled */
        }
        body {
            font-family: 'Inria Serif', serif;
        }
         @keyframes fadeIn {
            from {
                opacity: 0%;
            }
            to {
                opacity: 100%;
            }
        }
        .container-objek {
            animation-name: fadeIn;
            animation-duration: 0.5s;
            animation-timing-function: ease-in;
            animation-delay: 0s;
            animation-iteration-count: 1;
            animation-direction: normal;
            animation-fill-mode:none;
        }
        
    </style>
</head>
<body>
    <div style="padding-left: 230px;">
        <section class="px-8 py-0">
            <div class="mt-0">
                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($dokumentasis as $dokumentasi)
                    <div class="container-objek relative flex flex-col bg-clip-border bg-transparent text-gray-700 border border-blue-gray-100  rounded-lg">          
                        <div class=" text-gray-700 shadow-none !m-0 p-1 text-center ">
                            <img class="style-image w-full h-60" src="{{   $dokumentasi->image_url }}" alt="Image Description">
                            <h4 class="block antialiased tracking-normal text-xl font-semibold leading-snug text-blue-gray-900">{{ $dokumentasi->nama }}</h4>
                            <p class="block antialiased text-sm leading-normal text-inherit font-normal !text-gray-500">{{$dokumentasi->kontak }}</p>
                            <h4 class="block antialiased text-sm leading-normal text-inherit font-normal !text-gray-500">Biaya : Rp.{{ $dokumentasi->biaya }}<span class="block antialiased tracking-normal text-base font-semibold leading-relaxed text-blue-gray-900 -translate-y-0.5 self-end opacity-70"></span></h4>
                            <p class="block antialiased text-sm leading-normal text-inherit font-normal !text-gray-500">Kamera : {{$dokumentasi->kamera }}</p>
                                                   </div>
                        <div class=" border-t border-blue-gray-50  bg-slate-200 text-center">
                             <button class="custom-button w-10/12" type="button">SELECT VENUE</button>
</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</body>
</html>