@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="space-y-8">

    {{-- Tarjetas Top --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <div class="p-6 bg-white dark:bg-gray-800 rounded-xl shadow-lg border border-gray-200 dark:border-gray-700 transition">
            <h3 class="text-sm font-medium text-gray-600 dark:text-gray-300">Reservas de hoy</h3>
            <p class="text-4xl font-semibold text-gray-900 dark:text-white mt-2">12</p>
        </div>

        <div class="p-6 bg-white dark:bg-gray-800 rounded-xl shadow-lg border border-gray-200 dark:border-gray-700 transition">
            <h3 class="text-sm font-medium text-gray-600 dark:text-gray-300">Clientes Registrados</h3>
            <p class="text-4xl font-semibold text-gray-900 dark:text-white mt-2">48</p>
        </div>

        <div class="p-6 bg-white dark:bg-gray-800 rounded-xl shadow-lg border border-gray-200 dark:border-gray-700 transition">
            <h3 class="text-sm font-medium text-gray-600 dark:text-gray-300">Próximas Reservas</h3>
            <p class="text-4xl font-semibold text-gray-900 dark:text-white mt-2">5</p>
        </div>

    </div>


    {{-- Tabla --}}
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg border border-gray-200 dark:border-gray-700 p-6">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">
            Próximas Reservas
        </h3>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-gray-600 dark:text-gray-300">
                <thead class="text-xs uppercase bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300">
                    <tr>
                        <th class="px-4 py-3">Cliente</th>
                        <th class="px-4 py-3">Fecha</th>
                        <th class="px-4 py-3">Hora</th>
                        <th class="px-4 py-3">Servicio</th>
                        <th class="px-4 py-3 text-right">Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 transition">
                        <td class="px-4 py-3">María López</td>
                        <td class="px-4 py-3">2025-11-30</td>
                        <td class="px-4 py-3">16:00</td>
                        <td class="px-4 py-3">Terapia Reiki</td>
                        <td class="px-4 py-3 text-right">
                            <button class="px-3 py-1 text-sm bg-blue-600 hover:bg-blue-700 text-white rounded-lg">Ver</button>
                        </td>
                    </tr>

                    <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 transition">
                        <td class="px-4 py-3">Carlos Pérez</td>
                        <td class="px-4 py-3">2025-11-30</td>
                        <td class="px-4 py-3">18:30</td>
                        <td class="px-4 py-3">Lectura Tarot</td>
                        <td class="px-4 py-3 text-right">
                            <button class="px-3 py-1 text-sm bg-blue-600 hover:bg-blue-700 text-white rounded-lg">Ver</button>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>

    </div>

</div>
@endsection
