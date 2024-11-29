<div>
    <section id="Programs" class="bg-white">
        <div class="container mx-auto">
            <div class="w-full px-4">
                <h1 class="py-10 text-center text-4xl text-black font-bold">Daftar Program Kursus Bahasa Inggris
                </h1>
            </div>
            <div class="w-full py-3 flex justify-center">
                <button class="rounded-full bg-white ring-[#B0840D] ring-2 text-slate-700
             mx-3">
                    <a class="rounded-full flex text-xl font-semibold px-10 py-3">Dewasa</a>
                </button>
                <button
                    class="rounded-full bg-[#B0840D] ring-[#B0840D] ring-2 text-white
             mx-3 duration-300">
                    <a class="rounded-full flex text-xl font-semibold px-10 py-3">Anak</a>
                </button>

            </div>

            <div class="justify-center lg:mx-40">
                <div class="w-full px-4 lg:grid lg:grid-cols-2 gap-x-5">
                    @foreach ($program as $item)
                        <div class="bg-white rounded-xl mb-10 shadow-lg overflow-hidden">

                            <img src="{{ url('storage/' . $item->gambar) }}" alt="bekasi" class="w-full">
                            <div class="bg-white py-3 px-6 ">
                                <p class="text-center text-lg text-black font-semibold pb-2">{{ $item->judul }}</p>
                                <p class="text-slate-700 pb-2">{{ $item->deskripsi }}</p>
                                <div class="flex justify-center">
                                    <button class="rounded-full bg-[#B0840D] flex items-center my-3">
                                        <a class="text-white py-2 px-3" href="#">
                                            Daftar Sekarang
                                        </a>
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
