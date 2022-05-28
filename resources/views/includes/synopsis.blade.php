<div x-data="{ modelOpen: false }">


    <a @click="modelOpen =!modelOpen" class="mt-3 cursor-pointer text-slate-500 hover:text-indigo-500"> Synopsis et
        détail >
    </a>



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
                class="inline-block w-full max-w-xl overflow-hidden text-left transition-all transform 2xl:max-w-2xl">
                <div class="flex items-center justify-center space-x-4">


                    <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                    </button>
                </div>


                <div class="rounded-lg detail ">
                    <div class="w-3/5 m-5 mb-9">
                        <h1 class="m-4 text-3xl font-bold text-center text-black"> Synopsis</h1>
                        <p class="my-4 leading-loose text-black sm:w-3/5 lg:w-full">{{ $filma['resume'] }}</p>

                        <div class=" ligne">
                            <p class="w-1/2 my-4 text-black "> réaliser par : </p>
                            <p class="w-1/2 my-4 text-right text-black">{{ $filma['realisateur'] }}</p>
                        </div>
                        <div class="ligne ">
                            <p class="w-1/2 my-4 text-black"> genre : </p>
                            <p class="w-1/2 my-4 text-right text-black"></p>
                        </div>
                        <div class="ligne">
                            <p class="w-1/2 my-4 text-black"> durée : </p>
                            <p class="w-1/2 my-4 text-right text-black">{{ $filma['duree'] }}</p>
                        </div>
                        <div class="ligne">
                            <p class="w-1/2 my-4 text-black"> date : </p>
                            <p class="w-1/2 my-4 text-right text-black">{{ $filma['date'] }}</p>
                        </div>
                    </div>

                    <button @click="modelOpen = false"
                        class="relative flex items-center h-12 px-6 my-4 space-x-2 overflow-hidden rounded-lg group bg-gradient-to-r from-slate-800 to-red-800 hover:to-red-600">
                        <a class="relative text-sm text-white">RETOUR </a>
                        <div class="flex items-center -space-x-3 translate-x-3">
                            <div
                                class="w-2.5 h-[1.6px] rounded bg-white origin-left scale-x-0 transition duration-300 group-hover:scale-x-100">
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5 transition duration-300 -translate-x-2 stroke-white group-hover:translate-x-0"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </div>
                    </button>

                </div>



            </div>
        </div>
    </div>
</div>
