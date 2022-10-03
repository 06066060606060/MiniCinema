<!DOCTYPE html>
<html lang="en">
@include('includes.head')
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
  <title>Document</title>

<body>
  <div>
    <button id="retour" type="submit" class="flex justify-center w-24 px-4 py-2 mt-10 ml-10 text-sm font-semibold text-black bg-blue-300 border border-blue-500 rounded-md  hover:bg-lightblue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-50" aria-required="true">

      Retour
    </button> </a>
  </div>

<!-- <div class="fb-login-button" >Login with Facebook</div> -->
<div class="flex items-center justify-center min-h-screen px-4 py-12 sm:px-6 lg:px-8">




<div class="w-full max-w-md space-y-8">
@if ($errors->any())
    <div class="text-2xl font-semibold text-left text-red-600">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 <div>



  <div>
    <img src="storage/img/logo.png" alt="">
      
  </div>
  <p class="mt-2 text-sm font-semibold text-center text-gray-600">
    Tu as deja un compte?
    <a href="{{route('login') }}" class="font-semibold text-red-600 hover:text-red-500">
    Se connecter
    </a>
  </p>
</div>
<form class="mt-8 space-y-6" action="{{route('register.action')}}" method="POST">
  @csrf
  <input type="hidden" name="remember" value="true">
  <div class="-space-y-px rounded-md shadow-sm">
      <div>
          <label for="name" class="sr-only">Pseudo</label>
          <input id="name" name="name" type="text"  class="relative block w-full nom px-3 py-2 my-8 placeholder-gray-500 border border-black rounded appearance-none text-slate-600 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" placeholder="Pseudo"
          value="{{old('name')}}">
        </div>
      <div>
      <label for="email-address" class="sr-only">Email </label>
      <input id="email-address" name="email" type="email" autocomplete="email"  class="relative block w-full px-3 py-2 my-8 placeholder-gray-500 border border-black rounded appearance-none text-slate-600 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" placeholder="Email"
      value="{{old('email')}}" >
    </div>
    <div>
      <label for="password" class="sr-only">Mot de Passe</label>
      <input id="password" name="password" type="password" autocomplete="current-password"  class="relative block w-full px-3 py-2 my-8 placeholder-gray-500 border border-black rounded appearance-none text-slate-600 focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" placeholder="Mot de Passe" >
    </div>
  </div>

  <div>
    <button id="signin" type="submit" class="flex items-center justify-center w-48 px-4 py-2 mx-auto text-sm font-semibold text-white bg-red-500 border border-transparent rounded-md  hover:bg-lightblue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-50" aria-required="true">

      S'inscrire
    </button>
  </div>
</form>
</div>
</div>
</body>
</html>