<div>
    <section id="testi" class="">
        <div class="w-full px-4">
            <h1 class="py-10 text-center text-4xl text-black font-bold mb-3">Testimoni
            </h1>
            <div class="owl-four owl-carousel owl-theme">
                @foreach ($testimoni as $item)
                    <div class="item">
                        <div class="max-w-xl mx-auto">
                            <p class="text-center text-lg text-slate-700 italic">{{ $item->desc }}</p>
                        </div>
                        <div class="flex justify-center mt-5">
                            <div class="w-12">
                                <img src="{{ url('storage/' . $item->gambar) }}" alt=""
                                    class=" rounded-full mt-3">
                            </div>
                            <div class="ml-4 mt-3">
                                <h1 class="mb-1 text-black font-semibold">{{ $item->nama }}</h1>
                                <p class="text-sm text-slate-700">{{ $item->asal_pt }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
