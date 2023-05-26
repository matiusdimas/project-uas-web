<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/script.js')
    <title>perumahan</title>
</head>
<body class="w-screen">
    <nav class="flex shadow-lg bg-white px-20 items-center sticky top-0 w-full py-3">
        <h1 class="text-2xl font-bold pr-10">Perumahan</h1>
        <div id="hamburger" class="flex flex-col mt-1 gap-1 cursor-pointer lg:hidden absolute right-0 mr-20">
            <span class="w-6 h-[3px] bg-black transition duration-300 ease-in-out origin-top-left "></span>
            <span class="w-6 h-[3px] bg-black transition duration-300 ease-in-out"></span>
            <span class="w-6 h-[3px] bg-black transition duration-300 ease-in-out origin-bottom-left"></span>
        </div>
        <div id="nav-menu"
        class="navnull absolute z-50 left-0 top-14 w-full  bg-white text-center lg:static lg:flex lg:opacity-100 lg:visible border-b-2 shadow-xl lg:shadow-none lg:border-b-0">
        <ul class="lg:mr-10 lg:gap-x-10 lg:flex ">
            <li>
                <a href="#"
                    class="text-xl text-white lg:border-b-4 lg:border-[#EA5455] px-2 py-1 block bg-[#EA5455] lg:bg-inherit 2xl:text-6xl">
                    Home
                </a>
            </li>
            <li>
                <a href="#"
                    class="text-xl 2xl:text-6xl hover:bg-[#E4DCCF] hover:text-slate-900 lg:hover:border-b-4  px-2 py-1  block transition-all active:scale-95 active:opacity-80 lg:hover:bg-inherit lg:hover:text-white">
                    About
                </a>
            </li>
            <li>
                <a href="#"
                    class="text-xl hover:bg-[#E4DCCF] hover:text-slate-900 2xl:text-6xl lg:hover:border-b-4  px-2 py-1  block transition-all active:scale-95 active:opacity-80 lg:hover:bg-inherit lg:hover:text-white">
                    Contact
                </a>
            </li>
        </ul>
    </div>
    </nav>
    @yield('content')
</body>
</html>