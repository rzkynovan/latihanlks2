<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body >

        <header>
            <nav>
                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold text-white hover:text-indigo-500 p-2 px-4 bg-indigo-500 rounded-xl hover:bg-indigo-300 duration-300">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-white hover:text-indigo-500 p-2 px-4 bg-indigo-500 rounded-xl hover:bg-indigo-300 duration-300">Log in</a>
            
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-white hover:text-indigo-500 p-2 px-4 bg-indigo-500 rounded-xl hover:bg-indigo-300 duration-300">Register</a>
                            @endif
                        @endauth
                    </div>
                    <ul class=" flex gap-4 m-5">
                        <li><a href="" class=" font-semibold hover:text-indigo-400 duration-300">Home</a></li>
                        <li><a href="" class=" font-semibold hover:text-indigo-400 duration-300">Kelas</a></li>
                        <li><a href="" class=" font-semibold hover:text-indigo-400 duration-300">Siswa</a></li>
                    </ul>
                @endif
            </nav>
        </header>

        <main class="main lg:mt-16" id="main">
            <section class="hero-section">
                <div class="container lg:mx-28">
                    <div class="grid grid-cols-12 items-center gap-16">
                        <div class="col-span-5">
                            <h1 class=" text-6xl font-normal"><b>Selamat Datang Di LMS <br> <span class="font-bold text-red-600">SMK TELKOM SIDOARJO</span></b></h1>
                        </div>
                        <div class="col-span-6">
                            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <section class="siswa-section mt-16">
                <div class="header">
                    <h1 class="text-center font-bold text-6xl">List Siswa</h1>
                </div>
                <div class="container w-full m-auto">
                    <div class="grid grid-cols-4">
                        <div class="col-span-1">
                            <div class="card border-2 px-4 py-2">
                                <div class="card-header flex justify-between">
                                    <p>Nama :</p>
                                    <p>Rizky Novan A</p>
                                </div>
                                <div class="card-body mt-4">
                                    <img src="https://images.unsplash.com/photo-1517842536804-bf6629e2c291?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">
                                </div>
                                <div class="card-footer mt-4">
                                    <h4 class=" text-center"><b>Detail</b></h4>
                                    <div class="grid grid-cols-2 mt-2">
                                        <div class="col-span-1 flex flex-col">
                                            <p><b>Alamat</b></p>
                                            <p><b>Nomor Hp</b></p>
                                            <p><b>Emaik</b></p>
                                        </div>
                                        <div class="col-span-1 flex flex-col">
                                            <p>Alamat</p>
                                            <p>Nomor Hp</p>
                                            <p>Emaik</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
