<div>
    <div class="pt-16 xl:mx-0 lg:mx-24 md:mx-52 mx-10">
        <div class="mb-16">
            <h1 class="lg:text-4xl text-3xl lg:mx-0 mx-5 text-center text-slate-900 font-bold tracking-wide">Tutor
                Bahasa Inggris Dari Golden English</h1>
        </div>

        <div class="owl-one owl-carousel owl-theme">
            @foreach ($tutor as $item)
                <div class="item">
                    <img src="{{ url('storage/' . $item->gambar) }}" alt="" class="lg:px-0 md:px-0 px-16">
                    <div class="py-2 lg:mx-3 md:mx-0 mx-16 border-2 rounded-3xl shadow-xl bg-white relative bottom-5">
                        <div class="">
                            <h1 class="xl:text-3xl lg:text-2xl text-xl font-bold ml-16">{{ $item->nama }}</h1>
                            <h2 class="ml-16 font-semibold text-slate-900">{{ $item->gelar }}</h2>
                        </div>
                        <div class="w-10 py-[34px] rounded-3xl bg-[#B0840D] absolute bottom-[1px]"></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
