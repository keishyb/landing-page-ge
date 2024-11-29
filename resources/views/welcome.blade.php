<x-main.home-template>
    <!-- navbar -->
    @livewire('welcome.navbar-section')
    <!-- navbar-->

    {{-- jumbotron  --}}
    @livewire('welcome.jumbotron-section', ['jumbotron' => $jumbotron])
    {{-- jumbotron --}}

    {{-- isi --}}
    @livewire('welcome.isi-section')
    {{-- isi --}}

    {{-- programs --}}
    @livewire('welcome.program-section', ['program' => $program])
    {{-- programs --}}

    {{-- keunggulan --}}
    @livewire('welcome.keunggulan-section')
    {{-- keunggulan --}}

    {{-- tutor --}}
    @livewire('welcome.tutor-section', ['tutor' => $tutor])
    {{-- tutor --}}

    {{-- perusahaan --}}
    @livewire('welcome.company-section', ['company' => $company])
    {{-- perusahaan --}}

    {{-- Cabang --}}
    @livewire('welcome.branch-section', ['branch' => $branch])
    {{-- Cabang --}}

    {{-- artis --}}
    @livewire('welcome.artis-section', ['artis' => $artis])
    {{-- artis --}}

    {{-- bannner --}}
    @livewire('welcome.banner-section')
    {{-- banner --}}

    {{-- news --}}
    @livewire('welcome.media-section', ['media' => $media])
    {{-- news --}}

    {{-- testimoni --}}
   @livewire('welcome.testimoni-section', ['testimoni' => $testimoni])
    {{-- testimoni --}}

    {{-- konsul --}}
    @livewire('welcome.konsul-section')
    {{-- konsul --}}

    {{-- footer --}}
    @livewire('welcome.footer-section')
    {{-- footer --}}
</x-main.home-template>