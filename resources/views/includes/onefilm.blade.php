<div class="relative w-full mt-4 bg-center bg-cover rounded-lg page"
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.9)), url({{ Storage::url($filma->image) }})">

    <div class="px-10 lg:flex md:flex sm:block">
        <div class="flex flex-col py-12 mt-8 space-y-4 text-center md:w-3/4 lg:text-left md:text-left">


            <h3 class="text-4xl font-semibold text-white lg:text-5xl ">{{ $filma->titre }}</h3>
            <p class="text-lg text-white"> Genre :</p>
            <div class="flex flex-row w-full space-x-4">
               @include('includes.bandeAnnonce') 
               @include('includes.filmSeance')
            </div>

            <p class="text-white ">Sortie le : {{ $filma['date'] }}</p>
            <p class="text-white ">Durée: {{ $filma['duree'] }}</p>
            <p class="text-white ">De: {{ $filma['realisateur'] }}</p>
            <p class="text-lg text-white md:w-3/4 resumes ">{{ $filma['resume'] }}</p>
            @include('includes.synopsis')
        </div>
        <img class="w-[350px]  md:visible p-8 mt-8" src="{{ Storage::url($filma->image) }}" alt="">
    </div>
</div>
