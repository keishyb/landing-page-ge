<div>
    <div class="my-16 mx-10">
        <table id="table-data" class="border-collapse w-full">
            <thead>
                <tr class=" bg-gradient-to-r from-yellow-500 to-yellow-600 text-white">
                    <th class="p-3 font-bold uppercase border-gray-300 hidden lg:table-cell">nama</th>
                    <th class="p-3 font-bold uppercase border-gray-300 hidden lg:table-cell">alamat</th>
                    <th class="p-3 font-bold uppercase border-gray-300 hidden lg:table-cell">weekdays
                    </th>
                    <th class="p-3 font-bold uppercase border-gray-300 hidden lg:table-cell">weekend</th>
                    <th class="p-3 font-bold uppercase border-gray-300 hidden lg:table-cell">aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($branch as $item)
                    <tr
                        class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                        <td
                            class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                            <span
                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">nama</span>
                            {{ $item->nama }}
                        </td>
                        <td
                            class="w-full lg:w-auto p-3 text-gray-800  border border-b text-center block lg:table-cell relative lg:static">
                            <span
                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">alamat</span>
                            {{ $item->alamat }}
                        </td>
                        <td
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b text-center block lg:table-cell relative lg:static">
                            <span
                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">weekdays</span>
                            {{ $item->jam1 }}
                        </td>
                        <td
                            class="w-full lg:w-auto p-3 text-gray-800 border border-b text-center block lg:table-cell relative lg:static">
                            <span
                                class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">weekend</span>
                            {{ $item->jam2 }}
                        </td>
                        <td
                            class="lg:flex gap-x-4 gap-y-4 w-full lg:w-auto p-3 text-gray-800 text-center relative lg:static">
                            <a class="my-2 border px-3 py-2 rounded-lg text-white text-sm bg-yellow-600"
                                href="{{ route('edit-cabang', $item->id) }}">edit</a>
                            <a class="my-2 border px-3 py-2 rounded-lg text-white text-sm bg-red-600"
                                href="{{ route('delete-branch', $item->id) }}">delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>