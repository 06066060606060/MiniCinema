  <nav class="mt-2 bg-gray-300 rounded-lg shadow">
      <div class="flex flex-col mx-4 md:flex-row md:justify-between md:items-center">
          <div class="flex items-center justify-between">

              <div class="flex items-center">
                  <a href="/"> <img class="h-[100px] py-1 w-full pt-1 rounded-md"
                          src="{{ Storage::url('./img/logo.png') }}"></a>
                  <!-- Search input on desktop screen -->
                  <form class="my-2 form-inline lg:my-0" method="GET" action="{{ route('search') }}">
                      @csrf
                      <div class="hidden mx-10 md:block">
                          <div class="relative">
                              <span class="absolute inset-y-0 left-0 flex items-center pt-2 pl-3">
                                  <svg class="w-5 h-5 mb-2 text-gray-400" viewBox="0 0 24 24" fill="none">
                                      <path
                                          d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                          stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"></path>
                                  </svg>
                              </span>

                              <input type="text" name="query"
                                  class="w-full py-2 pl-10 pr-4 text-gray-700 bg-white border rounded-md focus:border-red-700 focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-red-300"
                                  placeholder="Rechercher un film...">
                              <button class="hidden " type="submit">
                              </button>
                          </div>

                      </div>
                    </form>
              </div>

          </div>


          <div class="items-center md:flex">
              <div class="flex flex-col mt-2 md:flex-row md:mt-0 md:mx-1">
                  <a class="my-1 text-sm leading-5 text-gray-700 transition-colors duration-200 transform hover:text-red-700 hover:underline md:mx-4 md:my-0"
                      href="{{ route('welcome') }}">Home</a>
                  <a class="my-1 text-sm leading-5 text-gray-700 transition-colors duration-200 transform hover:text-red-700 hover:underline md:mx-4 md:my-0"
                      href="{{ route('user') }}">Salle 1</a>
                  <a class="my-1 text-sm leading-5 text-gray-700 transition-colors duration-200 transform hover:text-red-700 hover:underline md:mx-4 md:my-0"
                      href="{{ route('crudee') }}">Salle 3</a>
                @auth  <a class="my-1 text-sm leading-5 text-gray-700 transition-colors duration-200 transform hover:text-red-700 hover:underline md:mx-4 md:my-0"
                      href="{{ route('backend') }}">backend</a> @endauth
                 @auth  <a class="my-1 text-sm leading-5 text-gray-700 transition-colors duration-200 transform hover:text-red-700 hover:underline md:mx-4 md:my-0"
                      href="{{ route('signout') }}">Deconnexion</a>@endauth
                      
              </div>

        <div class="  sm:order-3 flex justify-end gap-1 fa-2xl mr-2">
            @guest <i class="fa-solid fa-circle-user text-gray-500 "></i> @endguest
              @auth <i class="fa-solid fa-circle-user text-red-500 "></i> @endauth
             

                           
         </div>                    

              @guest
               <div class="flex items-center py-2 -mx-1 md:mx-0">
                  <a class="block w-1/2 px-3 py-2 mx-1 text-sm font-medium leading-5 text-center text-white transition-colors duration-200 transform bg-red-700 rounded-md hover:bg-red-500 md:mx-2 md:w-auto"
                      href="{{ route('register') }}">S'inscrire</a>
                   

              </div>
              <div class="flex items-center py-2 -mx-1 md:mx-0">
                <a class="block w-1/2 px-3 py-2 mx-1 text-sm font-medium leading-5 text-center text-white transition-colors duration-200 transform bg-red-700 rounded-md hover:bg-red-500 md:mx-2 md:w-auto"
                    href="{{ route('login') }}">Se connecter</a>

            </div>
            @endguest  

              <!-- Search input on mobile screen -->
              <div class="mt-3 md:hidden">
                  <div class="relative">
                      <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                          <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                              <path
                                  d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              </path>
                          </svg>
                      </span>

                      <input type="text"
                          class="w-full py-2 pl-10 pr-4 mb-2 text-gray-700 bg-white border rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-blue-300"
                          placeholder="Search">
                  </div>
              </div>
          </div>

      </div>
  </nav>
