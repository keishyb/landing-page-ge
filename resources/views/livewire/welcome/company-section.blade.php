<div>
    <section id="isi" class="pt-32 lg:pt-3">
        <div class=" mx-28">
            <div class="w-full px-4">
                <h1 class="py-5 text-center text-4xl text-black font-bold">Instansi/Perusahaan Yang Mempercayai Kami
                </h1>
            </div>
            <div class="owl-two owl-carousel owl-theme">
                @foreach ($company as $item)
                    <div class="item">
                        <img src="{{ url('storage/' . $item->gambar) }}" alt="">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
