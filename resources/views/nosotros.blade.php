@extends('layouts.app')

@section('titulo')
    Nosotros
@endsection

@section('contenido')
<div class="max-w-screen-xl mx-auto px-4 py-6">
    <!-- Encabezado de la Sección -->
    <div class="text-center">
        <h2 class="text-3xl font-bold">¿Quiénes somos?</h2>
        <p class="text-lg mt-2">En el Centro de Innovación para el Desarrollo Apícola Sustentable de Quintana Roo, estamos dedicados a impulsar la apicultura como una fuerza vital para la sostenibilidad ambiental y el desarrollo económico de nuestra región. Conformamos una comunidad de expertos, investigadores y apicultores comprometidos con la innovación y la aplicación de prácticas sostenibles que aseguren la salud de las abejas y el equilibrio del ecosistema. Nuestro trabajo se centra en la investigación avanzada, la formación técnica y la difusión de conocimientos que contribuyan al fortalecimiento de la apicultura local, promoviendo así la biodiversidad y ofreciendo soluciones prácticas y efectivas a los desafíos del sector.</p>
        <a href="#" class="text-blue-600 hover:text-blue-700 mt-4">Leer más de este tema</a>
    </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <!-- Directorio -->
    <h3 class="text-2xl font-bold mt-8 mb-4 text-center">Directorio del CIDASQROO</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Tarjeta de miembro del directorio -->
        <div class="bg-white shadow-lg rounded-lg p-4">
            <img src="../img/aurora.jpg" alt="" class="w-32 h-32 rounded-full mx-auto object-cover">
            <h4 class="text-xl mt-4 font-semibold">Responsable del CIDASQROO</h4>
            <p class="text-md">Titular: Mtra. Aurora Xolalpa Aroche</p>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-4">
            <img src="../img/edward.jpg" alt="" class="w-32 h-32 rounded-full mx-auto object-cover">
            <h4 class="text-xl mt-4 font-semibold">Coordinador de P.E. Ingeniería en Sistemas de Producción Agroecologicos</h4>
            <p class="text-md">Titular: Mtro. Edward Emmanuel Brito Estrella</p>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-4">
            <img src="path/to/directive3.jpg" alt="" class="w-32 h-32 rounded-full mx-autoobject-cover">
            <h4 class="text-xl mt-4 font-semibold">Investigador po México</h4>
            <p class="text-md">Titular: Dr. Fausto Rivero</p>
        </div>
        <div class="bg-white shadow-lg rounded-lg p-4">
            <img src="path/to/directive4.jpg" alt="" class="w-32 h-32 rounded-full mx-autoobject-cover">
            <h4 class="text-xl mt-4 font-semibold">Investigador por México</h4>
            <p class="text-md">Titular: Dra. Mariana</p>
        </div><div class="bg-white shadow-lg rounded-lg p-4">
            <img src="path/to/directive4.jpg" alt="" class="w-32 h-32 rounded-full mx-autoobject-cover">
            <h4 class="text-xl mt-4 font-semibold">Investigador por México</h4>
            <p class="text-md">Titular: Dra. Arit de Leon</p>
        </div>
    </div>
</div>

@endsection
