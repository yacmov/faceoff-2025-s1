@props(['profilePhoto', 'userName'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link href="https://fonts.bunny.net" rel="preconnect">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  {{-- FontAwesome cdn --}}
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>

<body class="font-sans antialiased">
  <div class="flex flex-col">
    <div class="flex">
      {{-- aside menu --}}
      <x-aside-menu.index
        class="m-4 shadow-xl"
        bgColor='bg-[#D42329]'
        textColor='text-white'
        profilePhoto="{{ $profilePhoto }}"
        userName="{{ $userName }}"
      ></x-aside-menu.index>
      <div class="flex-grow">
        <div class="min-h-screen">
          @include('layouts.navigation')
          <div class="my-4"></div>
          <!-- Page Heading -->
          @isset($header)
            <header class="mr-4 rounded-3xl border bg-[#424242] shadow-lg">
              <div class="mx-auto max-w-7xl px-4 py-4 sm:px-6 lg:px-8">
                {{ $header }}
              </div>
            </header>
          @endisset

          <!-- Page Content -->
          <main>
            {{ $slot }}
          </main>

        </div>
      </div>
    </div>
    {{-- Footer section --}}
      <x-footer class="h-full font-[800] text-white">All contents © Government of Western Australia 2025 . All rights
        reserved. </x-footer>
    </div>
  </div>
</body>

</html>
