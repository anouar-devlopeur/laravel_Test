<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
  
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Styles -->
   
</head>

<body class="antialiased">
    <div  class="relative py-4 px-6 bg-red-200" >
         <nav>
            <a class="text-2xl hover:bg-red-700 rounded-[10px]" href="{{ route('home.index')}}">Home</a>
            <a class="text-2xl hover:bg-red-700 rounded-[10px]" href="{{ route('home.about')}}">About</a>
            <a class="text-2xl hover:bg-red-700 rounded-[10px]" href="{{ route('computers.index')}}">Computers</a>
            <a class="text-2xl hover:bg-red-700 rounded-[10px]" href="{{ route('computers.create')}}">Create</a>
            <a class="text-2xl hover:bg-red-700 rounded-[10px]" href="{{ route('home.contact')}}">Contact</a>
         </nav>
    </div>
    <div
        class="relative  sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
   
        @yield('content')
    </div>
</body>

</html>