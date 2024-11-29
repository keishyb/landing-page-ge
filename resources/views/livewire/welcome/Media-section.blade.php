<div>
    <section id="News" class="bg-white">
        <div class="container mx-10">
            <div class="w-full px-4">
                <h1 class="py-10 text-center text-4xl text-black font-bold">Golden English dalam Media
                </h1>
            </div>
            <div class="owl-three owl-carousel owl-theme">
                @foreach ($media as $item)
                    <div class="item">
                        <div class="bg-white rounded-xl mb-10 shadow-lg border-2">
                            <img src="{{ url('storage/' . $item->gambar) }}" alt="bekasi"
                                class="w-full rounded-tl-lg rounded-tr-lg">
                            <div
                                class="relative mx-24 py-2 bg-white rounded-xl bottom-3 shadow-xl border-2 border-slate-100">
                                <h1 class="text-center font-semibold text-black text-lg">{{ $item->source }}</h1>
                            </div>
                            <div class="bg-white py-3 px-6 ">
                                <p class="text-slate-700 pb-2">{{ $item->desc }}</p>
                                <div class="flex justify-center">
                                    <button class="rounded-full bg-[#B0840D] flex items-center my-3">
                                        <a class="text-white py-2 px-3" href="#">
                                            Selengkapnya
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </section>
</div>
