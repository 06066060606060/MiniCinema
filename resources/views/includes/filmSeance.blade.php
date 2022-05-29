<div x-data="{ modelOpen: false }">
        
            <button  @click="modelOpen =!modelOpen" class="flex items-center justify-center w-auto px-3 py-2 mt-[1px] space-x-2 bg-gray-500 hover:bg-gray-400 bg-opacity-50 rounded-lg shadow-md ">
                <i class="text-white fa-solid fa-circle-info"></i>
                <span class="font-semibold text-white">Seances</span>
            </button>

 

    <div x-cloak x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title"
        role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
            <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"></div>

            <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                <div class="flex items-center justify-center space-x-4">
                   

                    <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                    </button>
                </div>


             

                <button type="submit"
                    class="flex items-center justify-center px-6 py-3 my-3 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-700 rounded-md hover:bg-red-600 focus:outline-none focus:bg-red-500 focus:ring focus:ring-red-300 focus:ring-opacity-50">
                    Réserver
                </button>

            </div>
        </div>
    </div>
</div>
