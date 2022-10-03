<head>
    <meta charset="utf-8" />
    <title>Tailwind css  carousel autoplay slider with arrow and indicators.</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
    <link
      href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <!-- Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
  </head>

  <body>
    <div class="swiper mySwiper my-6">
      <div class="swiper-wrapper">
        <div class="swiper-slide flex justify-center">
          <img
            class="object-cover w-1/2 h-96 "
            src="storage/img/33.jpg"
            alt="apple watch photo"
          />
        </div>
        <div class="swiper-slide flex justify-center">
          <img
            class="object-cover w-1/2 h-96"
            src="storage/img/44.jpg"
            alt="apple watch photo"
          />
        </div>
        <div class="swiper-slide flex justify-center">
          <img
            class="object-cover w-1/2 h-96"
            src="storage/img/22.jpg"
            alt="apple watch photo"
          />
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper('.mySwiper', {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
    </script>
  </body>
</html>



{{-- <div class="w-full mt-6 rounded-lg dark:bg-gray-500"
    style="background-image: url('{{ Storage::url('/img/cinema-banniere.jpg') }}'); background-position: center center; background-blend-mode: multiply; background-size: cover;">
    <div class="container flex flex-col flex-wrap content-center justify-center px-2 py-2 mx-auto md:p-4">
        <h1 class="text-5xl antialiased font-semibold leading-none text-center dark:text-gray-100">Abonnez-vous</h1>
        <p class="pt-2 pb-8 text-xl antialiased text-center dark:text-gray-100">Recevez la liste des sorties ciné</p>
        <div class="flex flex-row">
            <input type="text" placeholder="example@email.com" class="w-3/5 p-3 rounded-l-lg sm:w-2/3">
            <button type="button"
                class="w-2/5 p-3 font-semibold text-white bg-red-700 rounded-r-lg sm:w-1/3">Inscription</button>
        </div>
    </div>
</div> --}}

