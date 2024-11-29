<div>
    <x-main.main-template>
    <div class="relative flex min-h-screen text-gray-800 antialiased flex-col justify-center overflow-hidden bg-gradient-to-r from-yellow-500 to-yellow-700 sm:py-12">
        <div class="relative sm:w-96 mx-auto">
          <div class=" bg-white shadow-2xl rounded-lg text-left">
            <div class="px-8 py-6 ">
              <div class="text-center py-7">
                <h1 class="text-2xl font-bold ">create jumbotron here</h1>
              </div>
              <div>
              <label for="banner" class="block mt-3 font-semibold">banner</label>
              <input wire:model.defer="banner" id="banner" name="banner" type="file" class=" border-yellow-600  w-full px-3 py-5 hover:outline-none focus:outline-none focus:ring-yellow-700 focus:ring-1 rounded-md">
              </div>
              <div class="mb-4">
                <label for="status" class="block mt-3 font-semibold">status</label>
                <select wire:model.defer="status" name="status" id="status" class="block mt-3 font-semibold">
                    <option value="">pilih status</option>
                    <option value="active">aktif</option>
                    <option value="deactive">tidak aktif</option>
                </select>
              </div>
              <div class="flex justify-between items-baseline">
                  <button wire:click="submit" class=" shadow-lg bg-gradient-to-r from-yellow-500 to-yellow-600 border border-yellow-600 mt-4 text-white py-2 px-6 rounded-md hover:bg-none hover:text-slate-700 focus:ring-2 focus:ring-yellow-700">submit</button>
                </div>                   
            </form>         
            </div>       
        </div>
      </div>
</div>
</x-main.main-template>
</div>
