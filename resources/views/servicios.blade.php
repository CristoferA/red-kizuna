@extends('layouts.app')

@section('content')
<section class="py-16 container mx-auto px-6">
    <h2 class="text-3xl font-bold text-center mb-12">Nuestros Servicios</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white shadow-lg rounded-xl p-6 text-center border border-gray-100 hover:shadow-xl transition">
            <h3 class="text-xl font-semibold mb-2">Terapias Individuales</h3>
            <p class="text-gray-600 mb-4">Sesiones personalizadas enfocadas en tu bienestar emocional.</p>
            <a href="/contacto" class="text-red-600 font-semibold hover:underline">Agendar sesión</a>
        </div>

        <div class="bg-white shadow-lg rounded-xl p-6 text-center border border-gray-100 hover:shadow-xl transition">
            <h3 class="text-xl font-semibold mb-2">Terapias Grupales</h3>
            <p class="text-gray-600 mb-4">Conecta con otros y comparte experiencias en un entorno seguro.</p>
            <a href="/contacto" class="text-red-600 font-semibold hover:underline">Ver disponibilidad</a>
        </div>

        <div class="bg-white shadow-lg rounded-xl p-6 text-center border border-gray-100 hover:shadow-xl transition">
            <h3 class="text-xl font-semibold mb-2">Charlas y Talleres</h3>
            <p class="text-gray-600 mb-4">Actividades para el desarrollo personal y crecimiento comunitario.</p>
            <a href="/contacto" class="text-red-600 font-semibold hover:underline">Más información</a>
        </div>
    </div>
</section>
@endsection
