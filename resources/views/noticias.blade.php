@extends('layouts.app')

@section('titulo')
    Noticias
@endsection

@section('contenido')
<div class="bg-white p-5">
    <h2 class="text-3xl font-bold text-gray-800 mb-5">BLOG DE NOTICIAS</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <!-- Primer Artículo -->
        <div class="flex flex-col bg-gray-100 p-4 rounded-lg">
            <img src="../img/img_noticia1.jpg" alt="PEN America en crisis" class="rounded-lg mb-2">
            <h3 class="text-lg font-semibold">PEN America: en crisis debido a las protestas de escritores por su postura sobre la guerra en Gaza</h3>
            <p class="text-gray-600 text-sm mb-2">RIALTA STAFF - 29 abril, 2024</p>
            <p class="text-gray-600 text-sm mb-4">Descripción corta del artículo que acompaña la imagen mostrada.</p>
            <a href="#" class="text-blue-600 hover:text-blue-800">Leer más</a>
        </div>

        <!-- Segundo Artículo -->
        <div class="flex flex-col bg-gray-100 p-4 rounded-lg">
            <img src="../img/img_noticia2.jpg" alt="Publican 'Bartleby y yo'" class="rounded-lg mb-2">
            <h3 class="text-lg font-semibold">Publican en español ‘Bartleby y yo’, el último libro del escritor estadounidense Gay Talese</h3>
            <p class="text-gray-600 text-sm mb-2">Nombre del Autor - Fecha</p>
            <p class="text-gray-600 text-sm mb-4">Descripción corta del artículo que acompaña la imagen mostrada.</p>
            <a href="#" class="text-blue-600 hover:text-blue-800">Leer más</a>
        </div>

        <!-- Tercer Artículo -->
        <div class="flex flex-col bg-gray-100 p-4 rounded-lg">
            <img src="../img/img_noticia3.jpg" alt="Artista Ernesto Neto" class="rounded-lg mb-2">
            <h3 class="text-lg font-semibold">Artista brasileño Ernesto Neto explora el cruce de culturas entre continentes en una exposición en Lisboa</h3>
            <p class="text-gray-600 text-sm mb-2">Nombre del Autor - Fecha</p>
            <p class="text-gray-600 text-sm mb-4">Descripción corta del artículo que acompaña la imagen mostrada.</p>
            <a href="#" class="text-blue-600 hover:text-blue-800">Leer más</a>
        </div>

        <!-- Cuarto Artículo -->
        <div class="flex flex-col bg-gray-100 p-4 rounded-lg">
            <img src="../img/img_noticia4.jpeg" alt="Ceramista Toshiko Takaezu" class="rounded-lg mb-2">
            <h3 class="text-lg font-semibold">Inauguran retrospectiva itinerante de la ceramista Toshiko Takaezu en Estados Unidos</h3>
            <p class="text-gray-600 text-sm mb-2">Nombre del Autor - Fecha</p>
            <p class="text-gray-600 text-sm mb-4">Descripción corta del artículo que acompaña la imagen mostrada.</p>
            <a href="#" class="text-blue-600 hover:text-blue-800">Leer más</a>
        </div>
    </div>
</div>

{{-- <div class="bg-white p-5">
    <h2 class="text-2xl font-bold text-gray-800 mb-3">BLOG DE NOTICIAS</h2>
    <div class="grid grid-rows-5 grid-flow-col  gap-4">
        <div class="row-span-3">
            <img src="../img/img_noticia1.jpg" alt="Descripción de la imagen" class="w-full h-auto object-cover">
            <h3 class="text-lg font-semibold">PEN America: en crisis debido a las protestas de escritores por su postura sobre la guerra en Gaza</h3>
            <p class="text-gray-600 text-sm">RIALTA STAFF - 29 abril, 2024</p>
        </div>
        <div class="row-span-2 col-span-2">
            <img src="../img/img_noticia2.jpg" alt="Descripción de la imagen" class="w-full h-auto object-cover">
            <h3 class="text-lg font-semibold">Publican en español ‘Bartleby y yo’, el último libro del escritor estadounidense Gay Talese</h3>
            <p class="text-gray-600 text-sm">Nombre del Autor - Fecha</p>
        </div>
        <div class="row-span-1">
            <img src="../img/img_noticia3.jpg" alt="Descripción de la imagen" class="w-full h-auto object-cover">
            <h3 class="text-lg font-semibold">Artista brasileño Ernesto Neto explora el cruce de culturas entre continentes en una exposición en Lisboa</h3>
            <p class="text-gray-600 text-sm">Nombre del Autor - Fecha</p>
        </div>
        <div class="row-span-1">
            <img src="../img/img_noticia4.jpeg" alt="Descripción de la imagen" class="w-full h-auto object-cover">
            <h3 class="text-lg font-semibold">Inauguran retrospectiva itinerante de la ceramista Toshiko Takaezu en Estados Unidos</h3>
            <p class="text-gray-600 text-sm">Nombre del Autor - Fecha</p>
        </div>
    </div>
</div> --}}
<div class="flex flex-col md:flex-row md:items-center bg-white p-4 shadow-md">
    <img src="../img/img_noticia2.jpg" alt="Descripción de la imagen" class="w-full md:w-1/3 h-auto object-cover mb-4 md:mb-0 md:mr-4">
    <div class="space-y-2">
        <h3 class="text-xl font-semibold text-gray-900">Bruselas acoge hasta julio la primera entrega de ‘Imagine!’, una muestra itinerante para celebrar...</h3>
        <p class="text-gray-500 text-sm">Blog de Noticias | RIALTA STAFF - 28 abril, 2024</p>
        <p class="text-gray-600">Imagine! 100 Years of International Surrealism, una amplia exposición itinerante que reúne más de 130 piezas, incluidas no pocas de grandes maestros de la vanguardia como Max Ernst, Giorgio de Chirico, Salvador Dalí, Joan...</p>
        <button class="text-blue-600 hover:text-blue-800">Leer más</button>
    </div>
</div>


@endsection
