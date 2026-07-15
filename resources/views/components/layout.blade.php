<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    {{ config('app.name', 'Habit Tracker') }}
  </title>

  @vite('resources/css/app.css')
</head>

<body class="bg-[#FFEDD6]">

  {{-- HEADER --}}
  <x-header />


  {{ $slot }}

  {{-- FOOTER --}}
  <x-footer />

</body>

</html>
