@extends('layouts.app')

@section('titulo')
    Difusión
@endsection

@section('contenido')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold  bg-red-900 text-white inline-block px-8 my-8 rounded-r-3xl">Libros publicados</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <x-editorial-card
                title="Abejas y plaguicidas: Entender y actuar en casos de intoxicación de abejas"
                author="Juan Iván Martínez Ortega"
                image="../img/portada1.png"
            />
            <x-editorial-card
                title="Los hongos macroscópicos del Tacaná, el Soconusco, Chiapas, México"
                author="René Humberto Andrade Gallegos, José Ernesto Sánchez Vázquez"
                image="../img/portada1.png"
            />
            <x-editorial-card
                title="Otro título de ejemplo"
                author="Autor de ejemplo"
                image="../img/portada1.png"
            />
            <x-editorial-card
                title="Otro título de ejemplo"
                author="Autor de ejemplo"
                image="../img/portada1.png"
            />

        </div>
    </div>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold  bg-red-900 text-white inline-block px-8 my-8 rounded-r-3xl">Articulos</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <x-editorial-card
                title="Abejas y plaguicidas: Entender y actuar en casos de intoxicación de abejas"
                author="Juan Iván Martínez Ortega"
                image="../img/portada1.png"
            />
            <x-editorial-card
                title="Los hongos macroscópicos del Tacaná, el Soconusco, Chiapas, México"
                author="René Humberto Andrade Gallegos, José Ernesto Sánchez Vázquez"
                image="../img/portada1.png"
            />
            <x-editorial-card
                title="Otro título de ejemplo"
                author="Autor de ejemplo"
                image="../img/portada1.png"
            />
            <x-editorial-card
                title="Otro título de ejemplo"
                author="Autor de ejemplo"
                image="../img/portada1.png"
            />

        </div>
    </div>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold  bg-red-900 text-white inline-block px-8 my-8 rounded-r-3xl">Infografias</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <x-editorial-card
                title="Abejas y plaguicidas: Entender y actuar en casos de intoxicación de abejas"
                author="Juan Iván Martínez Ortega"
                image="../img/portada1.png"
            />
            <x-editorial-card
                title="Los hongos macroscópicos del Tacaná, el Soconusco, Chiapas, México"
                author="René Humberto Andrade Gallegos, José Ernesto Sánchez Vázquez"
                image="../img/portada1.png"
            />
            <x-editorial-card
                title="Otro título de ejemplo"
                author="Autor de ejemplo"
                image="../img/portada1.png"
            />
            <x-editorial-card
                title="Otro título de ejemplo"
                author="Autor de ejemplo"
                image="../img/portada1.png"
            />

        </div>
    </div>
@endsection
