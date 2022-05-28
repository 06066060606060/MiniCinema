
<section>
    <div class="w-full p-5 mx-auto mt-6 bg-gray-200 rounded-lg">
        <h1 class="flex justify-around pb-6 font-medium text-black sm:text-4xl title-font">Prochainement à l'affiche</h1>
        <div class="grid grid-cols-1 gap-10 lg:grid-cols-4 sm:grid-cols-2">
            @foreach ($films as $film)
                <div class="relative flex items-end justify-start w-full overflow-hidden text-left bg-center bg-cover rounded-lg dark:bg-gray-500 h-[30rem]"
                    style="background-image: url({{ Storage::url($film->image) }});">
                    <div
                        class="absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-b dark:via-transparent dark:from-gray-900 dark:to-gray-900">
                    </div>
                    <div class="absolute top-0 left-0 right-0 flex items-center justify-between mx-5 mt-3">
                        <div class="flex flex-col justify-start text-center dark:text-gray-100">
                            <span
                                class="px-2 py-2 leading-none tracking-wide bg-blue-600 border border-black rounded-lg ">{{ date('d M', strtotime($film->date)) }}</span>
                        </div>
                    </div>
                    <h2 class="z-10 p-5">
                        <a rel="noopener noreferrer" href="film/{{$film->id_film}}"
                            class="font-medium text-md hover:underline dark:text-gray-100">{{ $film->titre }}</a>
                    </h2>
                </div>
            @endforeach
        </div>
    </div>
</section>
