@extends('app')

@section('content')
<section class="py-16 container mx-auto px-6 max-w-lg">
    <h2 class="text-3xl font-bold text-center mb-12">Reserva tu sesión</h2>

    <form action="{{ route('booking.store') }}" method="POST" class="space-y-6">
        @csrf

        <div>
            <label class="block text-sm font-semibold text-gray-700">Nombre</label>
            <input type="text" name="name" required class="w-full border rounded-lg px-4 py-2">
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700">Correo</label>
            <input type="email" name="email" required class="w-full border rounded-lg px-4 py-2">
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700">Fecha</label>
            <input type="date" name="date" required class="w-full border rounded-lg px-4 py-2">
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700">Hora</label>
            <input type="time" name="time" required class="w-full border rounded-lg px-4 py-2">
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700">Servicio</label>
            <input type="text" name="service" required class="w-full border rounded-lg px-4 py-2">
        </div>

        <button type="submit" class="w-full bg-red-600 text-white font-semibold py-2 rounded-lg hover:bg-red-700 transition">
            Reservar
        </button>
    </form>

    @if(session('success'))
        <div class="mt-6 bg-green-100 text-green-800 px-4 py-3 rounded-lg text-center">
            {{ session('success') }}
        </div>
    @endif
</section>
@endsection
