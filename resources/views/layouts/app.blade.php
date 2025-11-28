<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      x-data="{ darkMode: JSON.parse(localStorage.getItem('darkMode') || 'false') }"
      x-init="$watch('darkMode', val => {
            document.documentElement.classList.toggle('dark', val);
            localStorage.setItem('darkMode', val);
        })"
      class="bg-gray-50 dark:bg-gray-900">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Red Kizuna') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Alpine.js (por si Breeze no lo incluye en tu build actual) --}}
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="font-sans antialiased text-gray-800 dark:text-gray-200 flex">

    {{-- SIDEBAR --}}
    <aside class="w-64 bg-white dark:bg-gray-800 border-r border-gray-200 dark:border-gray-700 min-h-screen px-5 py-6">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100 mb-6">
            Red Kizuna
        </h2>

        <nav class="space-y-1">

            <a href="{{ route('dashboard') }}"
               class="flex items-center gap-2 px-4 py-2 rounded-lg
                      {{ request()->routeIs('dashboard')
                          ? 'bg-indigo-600 text-white'
                          : 'text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-indigo-700' }}">
                📊 Dashboard
            </a>

            <a href="{{ route('booking.create') }}"
               class="flex items-center gap-2 px-4 py-2 rounded-lg
                      text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-indigo-700">
                📅 Reservas
            </a>

            <a href="#"
               class="flex items-center gap-2 px-4 py-2 rounded-lg
                      text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-indigo-700">
                👤 Clientes
            </a>

            <a href="#"
               class="flex items-center gap-2 px-4 py-2 rounded-lg
                      text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-indigo-700">
                🧿 Servicios
            </a>

        </nav>
    </aside>


    {{-- CONTENIDO MAIN --}}
    <div class="flex-1 flex flex-col min-h-screen">

        {{-- HEADER SUPERIOR --}}
        <header class="w-full bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 px-6 py-4 flex justify-between items-center">

            <h1 class="text-lg font-semibold">
                @yield('title', 'Dashboard')
            </h1>

            {{-- Toggle Dark Mode --}}
            <button x-on:click="darkMode = !darkMode"
                    class="px-4 py-2 rounded-lg bg-gray-200 dark:bg-gray-700
                           text-gray-900 dark:text-gray-100 transition flex items-center gap-2">
                <span x-show="!darkMode">🌙 Modo Oscuro</span>
                <span x-show="darkMode">☀ Modo Claro</span>
            </button>
        </header>

        {{-- CONTENIDO DEL DASHBOARD --}}
        <main class="flex-1 p-6 bg-gray-50 dark:bg-gray-900">
            @yield('content')
        </main>

    </div>

</body>
</html>
