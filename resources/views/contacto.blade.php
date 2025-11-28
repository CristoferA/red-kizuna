@extends('app')

@section('content')
<section class="py-16 container mx-auto px-6 max-w-2xl">
    <h2 class="text-3xl font-bold text-center mb-12">Contáctanos</h2>

    <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
        @csrf
        <div>
            <label for="name" class="block text-sm font-semibold text-gray-700">Nombre</label>
            <input type="text" id="name" name="name" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-red-500">
        </div>

        <div>
            <label for="email" class="block text-sm font-semibold text-gray-700">Correo electrónico</label>
            <input type="email" id="email" name="email" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-red-500">
        </div>

        <div>
            <label for="message" class="block text-sm font-semibold text-gray-700">Mensaje</label>
            <textarea id="message" name="message" rows="4" required class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-red-500"></textarea>
        </div>

        <button type="submit" class="w-full bg-red-600 text-white font-semibold py-2 rounded-lg hover:bg-red-700 transition">
            Enviar mensaje
        </button>
    </form>
    @if(session('success'))
    <div class="mt-6 bg-green-100 text-green-800 px-4 py-3 rounded-lg text-center">
        {{ session('success') }}
    </div>
@endif
</section>
@endsection
