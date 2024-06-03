@extends('layouts.app')

@section('titulo')
    Servicios
@endsection

@section('contenido')
<div class="container mx-auto px-4">
    <div class="flex flex-col lg:flex-row">
        <!-- Sección de Imagen -->
        <div class="lg:w-1/3">
            <img src="path/to/image.jpg" alt="Imagen de Biofábrica" class="w-full h-auto object-cover">
        </div>

        <!-- Sección de Contenido -->
        <div class="lg:w-2/3 bg-gray-100 p-8">
            <h2 class="text-2xl font-semibold mb-4">BIOFÁBRICA</h2>
            <p class="text-gray-700 mb-4">
                La Biofábrica es una de las Unidades de Producción del CICY, fruto de la investigación enfocada al mejoramiento genético y la multiplicación acelerada in vitro de diferentes cultivos agrícolas, que se han desarrollado en la institución por más de 20 años y que ha permitido la obtención de protocolos para la producción a gran escala de cultivos que tienen alta demanda en el mercado nacional e internacional.
            </p>
            <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold">Conoce nuestros Sitio</a>
        </div>
    </div>
</div>

@endsection
