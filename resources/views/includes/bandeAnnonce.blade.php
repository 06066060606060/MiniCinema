<div x-data="{ modelOpen: false }">

    <button @click="modelOpen =!modelOpen"
        class="flex items-center justify-center w-auto px-3 py-2 space-x-2 bg-red-700 rounded-lg shadow-md ">
        <i class="text-white fa-solid fa-circle-play"></i>
        <span class="mb-[2px] font-semibold text-white">Bande-annonce</span>
    </button>



    <div x-cloak x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" onclick="stopVideos();" aria-labelledby="modal-title"
        role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
            <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity bg-black bg-opacity-95" aria-hidden="true"></div>

            <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="flex flex-col items-center h-[600PX] justify-center w-3/4 p-8 m-auto space-x-4 overflow-hidden transition-all transform 2xl:max-h-2xl 2xl:max-w-2xl">

                
                    <button @click="modelOpen = false"
                        class="flex items-center justify-center w-auto px-3 py-2 my-2 space-x-2 bg-red-700 rounded-lg shadow-md ">
                        <span class="mb-[2px] font-semibold text-white"> fermer</span>
                    </button>
                    <iframe height="100%" width="100%" src="https://www.youtube.com/embed/47r8FXYZWNU"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                
            </div>
        </div>
    </div>
</div>
