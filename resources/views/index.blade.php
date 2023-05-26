@extends('partials.main')
@section('content')
<div class="grid justify-center py-10  bg-[#AFD3E2]">
    <h1 class="text-center text-slate-700 mb-2 font-semibold">Jual Beli Rumah</h1>
    <div class="bg-[#19A7CE] rounded-md px-8 py-5 grid justify-items-center gap-4">
        <ul class="flex gap-5 text-white font-bold">
            <li><a href="#" class="border-b-2 px-2">Di Jual</a></li>
            <li><a href="#" class="px-2">Di Sewa</a></li>
        </ul>
        <div class="relative mb-3">
            <input
              type="email"
              class="peer m-0 block h-[58px] w-full rounded border border-solid border-neutral-300 bg-white bg-clip-padding px-3 py-2 text-black text-base font-normal leading-tight transition duration-200 ease-linear placeholder:text-transparent focus:border-primary focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-black focus:outline-none peer-focus:text-primary [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]"
              id="floatingInput"
              placeholder="Cari Rumah" />
            <label
              for="floatingInput"
              class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-black transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-primary peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
              >Cari Rumah</label
            >
          </div>
    </div>
</div>

<div class=" px-10 mt-10 w-full">
    <h1 class="font-bold mx-2 mb-5">Rekomendasi Rumah</h1>
    <div class="flex overflow-x-auto no-scrollbar space-x-4 w-full">
        <div class="flex-shrink-0 ">
            <img class="rounded-lg w-52 h-36" src="{{ asset('/img/rumah1.jpg') }}" alt="rumah"   >
            <div class="ml-2">
                <p class="text-blue-900 font-semibold">Rp 157 Juta</p>
                <p>Tipe 30</p>
                <p class="font-light text-xs">Majalaya</p>
            </div>
        </div>

        <div class="flex-shrink-0 ">
            <img class="rounded-lg w-52 h-36" src="{{ asset('/img/rumah2.jpg') }}" alt="rumah">
            <div class="ml-2">
                <p class="text-blue-900 font-semibold">Rp 157 Juta</p>
                <p>Tipe 30</p>
                <p class="font-light text-xs">Majalaya</p>
            </div>
        </div>

        <div class="flex-shrink-0 ">
            <img class="rounded-lg w-52 h-36" src="{{ asset('/img/rumah3.jpg') }}" alt="rumah">
            <div class="ml-2">
                <p class="text-blue-900 font-semibold">Rp 157 Juta</p>
                <p>Tipe 30</p>
                <p class="font-light text-xs">Majalaya</p>
            </div>
        </div>

        <div class="flex-shrink-0 ">
            <img class="rounded-lg w-52 h-36" src="{{ asset('/img/rumah4.jpg') }}" alt="rumah">
            <div class="ml-2">
                <p class="text-blue-900 font-semibold">Rp 157 Juta</p>
                <p>Tipe 30</p>
                <p class="font-light text-xs">Majalaya</p>
            </div>
        </div>
        
        <div class="flex-shrink-0 ">
            <img class="rounded-lg w-52 h-36" src="{{ asset('/img/rumah5.jpg') }}" alt="rumah">
            <div class="ml-2">
                <p class="text-blue-900 font-semibold">Rp 157 Juta</p>
                <p>Tipe 30</p>
                <p class="font-light text-xs">Majalaya</p>
            </div>
        </div>
        <div class="flex-shrink-0 ">
            <img class="rounded-lg w-52 h-36" src="{{ asset('/img/rumah1.jpg') }}" alt="rumah">
            <div class="ml-2">
                <p class="text-blue-900 font-semibold">Rp 157 Juta</p>
                <p>Tipe 30</p>
                <p class="font-light text-xs">Majalaya</p>
            </div>
        </div>
    </div>
</div>


@endsection