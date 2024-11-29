<div>
    <section id="cabang" class="mt-6">
        <div class="container">
            <div class="w-full px-4 py-4">
                <p class="text-md font-semibold text-center">
                    Yuk temukan Lokasi Kursus Terdekat dari rumah mu
                </p>
                <h1 class="text-center text-4xl text-black font-bold">
                    Cabang Golden English
                </h1>
                <div class="gap-x-4 lg:grid lg:grid-cols-2">
                    @foreach ($branch as $item)
                        <div class="px-2 py-7 mx-6 ">
                            <div class="border rounded-lg shadow-lg">
                                <h1 class="font-bold text-2xl py-3 px-5">
                                    {{ $item->nama }}
                                </h1>
                                <p class=" text-sm text-slate-700 px-5 py-3 ">
                                    {{ $item->alamat }}
                                </p>
                                <ul class="grid grid-cols-2">
                                    <li>
                                        <p class="text-sm font-semibold px-5 pt-3">{{ $item->hari1 }}</p>
                                        <p class="text-sm font-semibold px-5 pb-2
                                 ">
                                            {{ $item->jam1 }}</p>
                                    </li>
                                    <li>
                                        <p class="text-sm font-semibold px-5 pt-3">{{ $item->hari2 }}</p>
                                        <p class="text-sm font-semibold px-5 pb-2 ">{{ $item->jam2 }}</p>
                                    </li>
                                </ul>
                                <div>
                                    <button
                                        class="mb-5 mt-2
                                ml-4 border rounded-lg bg-[#B0840D] px-2 py-2 text-white">
                                        <a href="">Lihat Maps</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
