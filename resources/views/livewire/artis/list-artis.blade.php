<div>
    <x-main.main-template>
    <div class="my-16 mx-10">
        <div class="flex justify-between mb-5">
        <h1 class="text-3xl font-bold">List Artis</h1>
        <a class=" bg-gradient-to-r from-yellow-500 to-yellow-600 px-4 py-2 rounded-lg text-white font-semibold border-2 border-yellow-600 hover:ring-yellow-600 hover:bg-none hover:text-slate-700
        duration-300" href="{{ route('create-artis')}}">CREATE</a>
    </div>
    <table id="table-data" class="border-collapse w-full">
        <thead>
            <tr class=" bg-gradient-to-r from-yellow-500 to-yellow-600">
                <th class="p-3 font-bold uppercase text-white border-gray-300 hidden lg:table-cell">nama</th>
                <th class="p-3 font-bold uppercase text-white border-gray-300 hidden lg:table-cell">gambar</th>
                <th class="p-3 font-bold uppercase text-white border-gray-300 hidden lg:table-cell">aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($artis as $item)     
            <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">nama</span>
                    {{$item->nama}}
                </td>
                  <td class="w-full lg:w-auto p-3 text-gray-800 border border-b text-center block lg:table-cell relative lg:static">
                    <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">gambar</span>
                    {{$item->gambar}}
                  </td>  
                <td class="lg:flex gap-x-4 w-full lg:w-auto p-3 text-gray-800 text-center relative lg:static">
                <a class="my-2 border px-3 py-2 rounded-lg text-white text-sm bg-yellow-600" href="{{ route('edit-artis', $item->id) }}">edit</a>
                <a class="my-2 border px-3 py-2 rounded-lg text-white text-sm bg-red-600" href="{{ route('delete-artis', $item->id) }}">delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</x-main.main-template>
</div>
