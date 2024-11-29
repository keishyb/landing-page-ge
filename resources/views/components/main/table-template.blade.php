<div>
    <div>
        <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>List Testimoni</title>
        <style>
            [x-cloak] { display: none !important; }
        </style>
        @vite('resources/css/app.css')
        {{-- <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css"> --}}
        <livewire:styles />
    </head>
    <body class=" selection:bg-yellow-600 font-inter">
        <div>
            <div class="flex justify-between mb-5 mx-10 my-10">
                <h1 class="text-3xl font-extrabold font-kalnia ">List Branch</h1>
                <a class=" bg-gradient-to-r from-yellow-500 to-yellow-600 px-4 py-2 rounded-lg text-white font-semibold border-2 border-yellow-600 hover:ring-yellow-600 hover:bg-none hover:text-slate-700
            duration-300"
                    href="{{ route('create-branch') }}">CREATE</a>
            </div>
    
            <div class="mx-10">
                {{$slot}}
            </div>
        </div>
        <livewire:scripts />
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        {{-- <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script> --}}
        
        <script>
        // $(document).ready(function() {
        //     $('#table-data').DataTable();
        // });
    </script>
    </body>
    </html>
    </div>
</div>