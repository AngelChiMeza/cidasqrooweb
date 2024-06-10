@extends('layouts.app')

@section('titulo')
    Infraestructura
@endsection

@section('contenido')
<div x-data="{ selectedLaboratorio: 'patologia-apicola' }" class="container mx-auto py-8 px-4">
    <div class="flex flex-wrap">
        <!-- Sección principal -->
        <div class="w-full lg:w-3/4 pr-0 lg:pr-8">
            <template x-if="selectedLaboratorio === 'patologia-apicola'">
                @include('components.laboratorios.patologia-apicola')
            </template>
            <template x-if="selectedLaboratorio === 'inocuidad-calidad-miel'">
                @include('components.laboratorios.inocuidad-calidad-miel')
            </template>
            <template x-if="selectedLaboratorio === 'lab-uhplc'">
                @include('components.laboratorios.lab-uhplc')
            </template>
            <template x-if="selectedLaboratorio === 'biologia-molecular'">
                @include('components.laboratorios.biologia-molecular')
            </template>
            <template x-if="selectedLaboratorio === 'conservacion-especies'">
                @include('components.laboratorios.conservacion-especies')
            </template>
            <!-- Añadir más templates para otros laboratorios -->
        </div>
        <!-- Barra lateral -->
        <div class="w-full lg:w-1/4">
            <div class="bg-white rounded-lg shadow-lg">
                <div class="bg-red-800 text-white p-4 rounded-t-lg">
                    <h2 class="font-bold text-xl">Laboratorios</h2>
                </div>
                <ul class="list-none p-4">
                    <li class="border-b border-dashed border-gray-300 pb-2 mb-2">
                        <a href="#" @click.prevent="selectedLaboratorio = 'patologia-apicola'" class="flex items-center text-gray-900 hover:text-gray-600 no-underline">
                            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M15.28 9.47a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 1 1-1.06-1.06L13.69 10 9.97 6.28a.75.75 0 0 1 1.06-1.06l4.25 4.25ZM6.03 5.22l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L8.69 10 4.97 6.28a.75.75 0 0 1 1.06-1.06Z" clip-rule="evenodd" />
                            </svg>
                            Laboratorio de patología apícola
                        </a>
                    </li>
                    <li class="border-b border-dashed border-gray-300 pb-2 mb-2">
                        <a href="#" @click.prevent="selectedLaboratorio = 'inocuidad-calidad-miel'" class="flex items-center text-gray-900 hover:text-gray-600 no-underline">
                            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M15.28 9.47a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 1 1-1.06-1.06L13.69 10 9.97 6.28a.75.75 0 0 1 1.06-1.06l4.25 4.25ZM6.03 5.22l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L8.69 10 4.97 6.28a.75.75 0 0 1 1.06-1.06Z" clip-rule="evenodd" />
                            </svg>
                            Laboratorio de inocuidad y calidad de miel y sus derivados
                        </a>
                    </li>
                    <li class="border-b border-dashed border-gray-300 pb-2 mb-2">
                        <a href="#" @click.prevent="selectedLaboratorio = 'lab-uhplc'" class="flex items-center text-gray-900 hover:text-gray-600 no-underline">
                            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M15.28 9.47a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 1 1-1.06-1.06L13.69 10 9.97 6.28a.75.75 0 0 1 1.06-1.06l4.25 4.25ZM6.03 5.22l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L8.69 10 4.97 6.28a.75.75 0 0 1 1.06-1.06Z" clip-rule="evenodd" />
                            </svg>
                            Laboratorio de UHPLC
                        </a>
                    </li>
                    <li class="border-b border-dashed border-gray-300 pb-2 mb-2">
                        <a href="#" @click.prevent="selectedLaboratorio = 'biologia-molecular'" class="flex items-center text-gray-900 hover:text-gray-600 no-underline">
                            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M15.28 9.47a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 1 1-1.06-1.06L13.69 10 9.97 6.28a.75.75 0 0 1 1.06-1.06l4.25 4.25ZM6.03 5.22l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L8.69 10 4.97 6.28a.75.75 0 0 1 1.06-1.06Z" clip-rule="evenodd" />
                            </svg>
                            Laboratorio de Biología molecular
                        </a>
                    </li>
                    <li class="border-b border-dashed border-gray-300 pb-2 mb-2">
                        <a href="#" @click.prevent="selectedLaboratorio = 'conservacion-especies'" class="flex items-center text-gray-900 hover:text-gray-600 no-underline">
                            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M15.28 9.47a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 1 1-1.06-1.06L13.69 10 9.97 6.28a.75.75 0 0 1 1.06-1.06l4.25 4.25ZM6.03 5.22l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L8.69 10 4.97 6.28a.75.75 0 0 1 1.06-1.06Z" clip-rule="evenodd" />
                            </svg>
                            Conservación de especies botánicas y entomológicas
                        </a>
                    </li>
                    <!-- Añadir más enlaces para otros laboratorios -->
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
