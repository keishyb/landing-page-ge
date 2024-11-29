<div>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Golden English</title>
        @vite('resources/css/app.css')
        <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.css') }}">
        <livewire:styles />
    </head>

    <body class="antialiased selection:bg-yellow-600 selection:text-white font-monthmh">
        <div>
            {{$slot}}
        </div>
        <livewire:scripts />
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
        <script>
            // vertical
            const vertical = document.querySelector('#vertical');
            const navmenu = document.querySelector('#navmenu');

            vertical.addEventListener('click', function() {
                vertical.classList.toggle('vertical-active');
                navmenu.classList.toggle('hidden');
            });
        </script>
        <script>
            $(document).ready(function() {
                $('.owl-one').owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: false,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 3
                        }
                    }
                });

                $('.owl-two').owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: false,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 5
                        }
                    }
                });

                $('.owl-three').owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: false,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        1000: {
                            items: 3
                        }

                    }
                });

                $('.owl-four').owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: false,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        1000: {
                            items: 1
                        }

                    }
                });
            });
        </script>
    </body>
</html>
</div>
