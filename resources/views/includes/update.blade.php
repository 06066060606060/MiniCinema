<div x-data="{ modelOpen: false }">
    <button @click="modelOpen =!modelOpen">
        <i class="p-3 fa-solid fa-pen-to-square hover:text-blue-700"></i>
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
                    <h1 class="text-xl font-medium text-gray-800">Modifier un film</h1>

                    <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                    </button>
                </div>

                <form class="mt-5" method="post" action="{{  route('update', $film['id_film']) }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div>
                        <input type="text" name="id_film" value="{{ $film['id_film']}}" style="visibility:hidden">
                        <label for="titre"
                            class="block text-sm text-gray-700 capitalize ">Titre</label>
                        <input type="text" name="titre" value="{{ $film->titre }}"
                            class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-40" required>
                    </div>
                

   

                    <div class="mt-4">
                        <label for="resume"
                            class="block text-sm text-gray-700 capitalize ">Resumé</label>
                        <textarea name="resume"  rows="8"
                            class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-40" required>{{ $film->resume }}</textarea>
                    </div>
                    <div class="flex">
                        <div class="w-1/3">
                            <label for="categories"
                                class="block pt-3 pb-1 text-sm text-gray-700 capitalize">Catégorie</label>
                            <select name="categories[]" multiple
                                class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-40" required>

                                    @foreach ($categories as $categorie)
                                    <option
                                        @if ($categorie->id === $film->id_categorie) selected
                                            @endif value="{{ $categorie->id }}">
                                     {{ $categorie->genre }}
                                   </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="w-1/3">
                            <label for="realisateur"
                                class="block pt-3 pb-1 pl-2 text-sm text-gray-700 capitalize " >Realisateur</label>
                            <input type="text" name="realisateur" value="  {{ $film->realisateur }}"
                                class="block w-full px-3 py-2 mt-2 ml-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-40" required>
                        </div>
                        <div class="w-1/4 pt-3 pl-2">
                            <label for="duree"
                                class="block pb-1 pl-2 text-sm text-gray-700 capitalize ">Durée</label>
                            <input type="text" placeholder="0h00" name="duree" value="  {{ $film->duree }}"
                                class="block w-full px-3 py-2 mt-2 ml-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-40" required>
                        </div>
                    </div>
                    <div class="flex justify-between mt-2">
                        <label for="affiche" class=""></label>
                        <input type="file" class="block w-1/3 py-4 text-sm text-white file:py-2 file:px-6 file:rounded file:border-1 file:border-gray-400" onchange="loadFile(event)" name="images" value="">
                        <img id="output" width="100" src="{{ Storage::url($film->image)}}">
                        <button type="submit" class="flex items-center justify-center h-10 px-6 py-3 mt-4 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-700 rounded-md hover:bg-red-600 focus:outline-none focus:bg-red-500 focus:ring focus:ring-red-300 focus:ring-opacity-50">
                            Valider
                        </button>
                    </div>
                    <script>
                        var loadFile = function(event) {
                            var image = document.getElementById('output');
                            image.src = URL.createObjectURL(event.target.files[0]);
                        };
                        </script>
           
                </form>
            </div>
        </div>
    </div>
</div>
