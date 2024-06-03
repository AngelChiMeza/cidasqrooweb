@extends('layouts.app')

@section('titulo')
    Sistemas
@endsection

@section('contenido')
<main>
    <div class="bg-gray-100 flex items-center justify-center min-h-screen">
        <div class="bg-white shadow-md rounded-lg p-8 text-center">
          <h1 class="text-3xl font-bold mb-4 text-gray-800">Sección en Construcción</h1>
          <p class="text-gray-600 mb-6">Estamos trabajando en algo increíble. Vuelve pronto para más información.</p>
          <button id="notifyButton" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700">Notificarme</button>
        </div>
    </div>
  </main>
@endsection
