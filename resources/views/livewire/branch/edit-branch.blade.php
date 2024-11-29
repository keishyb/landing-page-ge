<div>
    <x-main.main-template>
        <div class="relative flex min-h-screen text-gray-800 antialiased flex-col justify-center overflow-hidden bg-gradient-to-r from-yellow-500 to-yellow-700 sm:py-12">
            <div class="relative sm:w-96 mx-auto">
              <div class=" bg-white shadow-2xl rounded-lg text-left">
                <div class="px-8 py-6 ">
                  <div class="text-center py-7">
                    <h1 class="text-2xl font-bold ">edit branch here</h1>
                  </div>
                  <div>
                  <label for="nama" class="block font-semibold">nama </label>
                  <input wire:model.defer="nama" id="nama" name="nama" type="text" class="border border-yellow-600  w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-yellow-700 focus:ring-1 rounded-md">
                  </div>
                  <div>
                  <label for="alamat" class="block mt-3 font-semibold">alamat</label>
                  <input wire:model.defer="alamat"  id="alamat" name="alamat" type="text" class="border border-yellow-600  w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-yellow-700 focus:ring-1 rounded-md">
                 </div> 
                  <div class="hidden">
                  <label for="hari1" class="block mt-3 font-semibold">weekdays</label>
                  <input wire:model.defer="hari1" id="hari1" value="senin-jum'at" name="hari1" type="text" class="border border-yellow-600  w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-yellow-700 focus:ring-1 rounded-md">
                  </div>
                  <div>
                  <label for="jam1" class="block mt-3 font-semibold">weekdays hours</label>
                  <input wire:model.defer="jam1" id="jam1" name="jam1" type="text" class="border border-yellow-600  w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-yellow-700 focus:ring-1 rounded-md">
                  </div>
                  <div class="hidden">
                  <label for="hari2" class="block mt-3 font-semibold">weekend</label>
                  <input wire:model.defer="hari2" id="hari2" value="sabtu-minggu" name="hari2" type="text"  class="border border-yellow-600  w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-yellow-700 focus:ring-1 rounded-md">
                  </div>
                  <div>
                  <label for="jam2" class="block mt-3 font-semibold">weekend hours</label>
                  <input wire:model.defer="jam2" id="jam2" name="jam2" type="text"  class="border border-yellow-600  w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-yellow-700 focus:ring-1 rounded-md">
                  </div>
                  <div class="flex justify-between items-baseline">
                      <button wire:click="submit" class=" shadow-lg bg-gradient-to-r from-yellow-500 to-yellow-600 border border-yellow-600 mt-4 text-white py-2 px-6 rounded-md hover:bg-none hover:text-slate-700 focus:ring-2 focus:ring-yellow-700">submit</button>
                    </div>                   
                </div>  
     </x-main.main-template>
    </div>
