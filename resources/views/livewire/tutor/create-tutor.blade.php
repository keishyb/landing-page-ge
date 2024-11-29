<div>
    <x-main.main-template>
    <div class="relative flex min-h-screen text-gray-800 antialiased flex-col justify-center overflow-hidden bg-gradient-to-r from-yellow-500 to-yellow-700 sm:py-12">
        <div class="relative sm:w-96 mx-auto">
          <div class=" bg-white shadow-2xl rounded-lg text-left">
            <div class="px-8 py-6 ">
              <div class="text-center py-7">
                <h1 class="text-2xl font-bold ">add tutor here</h1>
              </div>
              <div>
              <label for="gambar" class="block font-semibold">gambar</label>
              <input wire:model.defer="gambar" id="gambar" name="gambar" type="file" class=" border-yellow-600  w-full px-3 py-5 hover:outline-none focus:outline-none focus:ring-yellow-700 focus:ring-1 rounded-md">
              </div>
              <div>
              <label for="nama" class="block mt-3 font-semibold">nama</label>
              <input wire:model.defer="nama" id="nama" name="nama" type="text"  class=" border border-yellow-600  w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-yellow-700 focus:ring-1 rounded-md">
             </div> 
              <div>
              <label for="gelar" class="block mt-3 mb-2 font-semibold">gelar</label>
              <input wire:model.defer="gelar" id="gelar" name="gelar" type="text" class=" border-yellow-600  w-full px-3 py-5 hover:outline-none focus:outline-none focus:ring-yellow-700 focus:ring-1 rounded-md">
              </div>
              <div class="flex justify-between items-baseline">
                  <button wire:click="submit" class=" shadow-lg bg-gradient-to-r from-yellow-500 to-yellow-600 border border-yellow-600 mt-4 text-white py-2 px-6 rounded-md hover:bg-none hover:text-slate-700 focus:ring-2 focus:ring-yellow-700">submit</button>
                </div>            
            </form>         
            </div>       
        </div>
      </div>
    </x-main.main-template>
</div>
