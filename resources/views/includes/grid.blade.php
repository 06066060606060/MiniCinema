
<section>
    <div class="w-full mx-auto mt-6 bg-gray-200 rounded-lg">
        <h1 class="flex justify-around pt-4 pb-1 font-medium text-black sm:text-4xl title-font">Sorties de la semaine</h1>
        <div class="grid grid-cols-1 gap-1 -mt-8 lg:grid-cols-4 sm:grid-cols-2">
            @foreach ($filma as $film)
			<div class="h-[450px]">
                <a href="film/{{$film->id_film}}" class="relative flex items-end justify-start w-full overflow-hidden text-left bg-center bg-cover rounded-lg affiche1 h-[30rem] sm:h-[30rem] scale-75"
                    style="background-image: url({{ Storage::url($film->image) }});">
			</a>
				<div class="relative right-0 flex flex-col items-center mx-5 -top-[115px]">
					<div class="flex flex-col justify-start text-center">
						<span class="">
							@include('includes.seances')
						</span>
					</div>
				</div>
			</div>
            @endforeach
        </div>
    </div>
</section>

