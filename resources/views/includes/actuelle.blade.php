
<section>
    <div class="w-full p-5 mx-auto mt-6 bg-gray-200 rounded-lg">
        <h1 class="flex justify-around pb-6 font-medium text-black sm:text-4xl title-font">Actuellement en salle</h1>
        <div class="grid grid-cols-1 gap-10 lg:grid-cols-4 sm:grid-cols-2">
            @foreach ($films as $film)
			<div>
                <a href="film/{{$film->id_film}}" class="relative flex items-end justify-start w-full overflow-hidden text-left bg-center bg-cover rounded-lg affiche dark:bg-gray-500 h-[30rem]"
                    style="background-image: url({{ Storage::url($film->image) }});">
			</a>
				<div class="relative top-0 left-0 right-0 flex items-center mx-5 mt-3">
					<div class="flex flex-col justify-start text-center dark:text-gray-100">
						<span class="">
							@include('includes.seance')
						</span>
					</div>
					<h2 class="z-10 p-5">
                        <span rel="noopener noreferrer" href="#"
                            class="font-medium text-black text-md">{{ $film->titre }}</span>
                    </h2>
				</div>
			</div>
            @endforeach
        </div>
    </div>
</section>

