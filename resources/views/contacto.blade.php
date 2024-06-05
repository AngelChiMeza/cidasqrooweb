@extends('layouts.app')

@section('titulo')
    Contacto
@endsection

@section('contenido')

<div class="bg-gray-100 flex items-center justify-center min-h-full p-4">
    <div class="relative flex flex-col md:flex-row items-center justify-center w-full md:w-3/4 lg:w-2/3 space-y-4 md:space-y-0 md:space-x-4">
        <!-- Contact Info -->
        <div class="w-full md:w-1/2 h-auto bg-red-900 text-white p-8 md:p-12 flex flex-col justify-between relative z-10 rounded-lg">
            <div>
                <h2 class="text-3xl font-bold mb-4 text-amber-300">Contacto</h2>
                <p class="mb-4">cidasqroo@uimqroo.edu.mx</p>
                <p class="mb-4">Teléfonos: (997) 68-81441, 68-81438</p>
            </div>
            <div class="mb-8">
                <img src="../path_to_logo/logo.png" alt="Imagen abeja" class="w-16 h-16 mb-4">
                <h3 class="text-lg font-semibold">CIDASQROO</h3>
            </div>
            <p class="text-xs">El CIDASQROO es puntuado 10 sobre 10 en base a <a href="#" class="underline">50 comentarios.</a></p>
        </div>
        <!-- Contact Form -->
        <div class="w-full md:w-1/2 h-auto bg-white shadow-lg p-8 md:p-12 flex items-center justify-center z-20 rounded-lg">
            <div class="w-full">
                <h2 class="text-2xl font-semibold mb-6">¿Cómo podemos ayudarte?</h2>
                <form action="#" method="POST" class="space-y-6">
                    <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6 mb-6">
                        <div class="w-full md:w-1/2">
                            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500">
                        </div>
                        <div class="w-full md:w-1/2">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" name="email" id="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-amber-200 focus:border-amber-200">
                        </div>
                    </div>
                    <div>
                        <label for="mensaje" class="block text-sm font-medium text-gray-700">Mensaje</label>
                        <textarea name="mensaje" id="mensaje" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-amber-200 focus:border-amber-200"></textarea>
                    </div>
                    <div>
                        <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono</label>
                        <input type="text" name="telefono" id="telefono" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-amber-200 focus:border-amber-200">
                    </div>
                    <div class="pt-6">
                        <button type="submit" class="w-full bg-amber-500 text-red-900 font-bold py-2 rounded-md hover:bg-red-900 hover:text-amber-300">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
