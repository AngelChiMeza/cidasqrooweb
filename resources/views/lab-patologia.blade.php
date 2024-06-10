@extends('layouts.app')

@section('titulo')
    Infraestructura
@endsection

@section('contenido')
{{-- <div class="container mx-auto py-8 px-4">
    <div class="flex flex-wrap">
        <!-- Sección principal -->
        <div class="w-full lg:w-3/4 pr-0 lg:pr-8">
            <h1 class="text-4xl font-bold mb-4">Laboratorio de patología apícola</h1>
            <img src="https://via.placeholder.com/1000x500" alt="Geointeligencia" class="w-full h-auto mb-4">
            <p class="mb-4"><strong>Responsable:</strong> <a href="#" class="text-blue-600 underline">Mtro. Joel</a></p>
            <p class="text-gray-700 text-lg leading-relaxed">
                El <strong class="text-gray-800 underline">Laboratorio de patología apícola</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id elit non metus pharetra tincidunt eget in est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent tempor placerat arcu commodo semper. Nulla malesuada suscipit nisi, eu consequat lacus aliquam ut. Pellentesque rhoncus viverra tincidunt. Curabitur vel nibh id nibh semper mollis. Aliquam vehicula eros euismod gravida pulvinar. Nunc lobortis, turpis ut commodo scelerisque, elit odio vestibulum ante, sed euismod est metus id massa. Quisque consequat finibus tellus, vel iaculis risus dapibus sit amet. Nullam consequat venenatis nisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus tincidunt leo ac consectetur condimentum. Praesent tristique aliquam orci, vestibulum aliquet sem imperdiet id. Duis fringilla mi eget sem vulputate ultrices.
            </p>
        </div>
        <!-- Barra lateral -->
        <div class="w-full lg:w-1/4">
            <div class="bg-white rounded-lg shadow-lg">
                <div class="bg-red-800 text-white p-4 rounded-t-lg">
                    <h2 class="font-bold text-xl">Laboratorios</h2>
                </div>
                <ul class="list-none p-4">
                    <li class="border-b border-dashed border-gray-300 pb-2 mb-2">
                        <a href="#" class="flex items-center text-gray-900 hover:text-gray-600 no-underline">
                            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M15.28 9.47a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 1 1-1.06-1.06L13.69 10 9.97 6.28a.75.75 0 0 1 1.06-1.06l4.25 4.25ZM6.03 5.22l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L8.69 10 4.97 6.28a.75.75 0 0 1 1.06-1.06Z" clip-rule="evenodd" />
                            </svg>
                            Laboratorio de patología apícola
                        </a>
                    </li>
                    <li class="border-b border-dashed border-gray-300 pb-2 mb-2">
                        <a href="#" class="flex items-center text-gray-900 hover:text-gray-600 no-underline">
                            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M15.28 9.47a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 1 1-1.06-1.06L13.69 10 9.97 6.28a.75.75 0 0 1 1.06-1.06l4.25 4.25ZM6.03 5.22l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L8.69 10 4.97 6.28a.75.75 0 0 1 1.06-1.06Z" clip-rule="evenodd" />
                            </svg>
                            Laboratorio de inocuidad y calidad de miel y sus derivados
                        </a>
                    </li>
                    <li class="border-b border-dashed border-gray-300 pb-2 mb-2">
                        <a href="#" class="flex items-center text-gray-900 hover:text-gray-600 no-underline">
                            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M15.28 9.47a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 1 1-1.06-1.06L13.69 10 9.97 6.28a.75.75 0 0 1 1.06-1.06l4.25 4.25ZM6.03 5.22l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L8.69 10 4.97 6.28a.75.75 0 0 1 1.06-1.06Z" clip-rule="evenodd" />
                            </svg>
                            Laboratorio de UHPLC
                        </a>
                    </li>
                    <li class="border-b border-dashed border-gray-300 pb-2 mb-2">
                        <a href="#" class="flex items-center text-gray-900 hover:text-gray-600 no-underline">
                            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M15.28 9.47a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 1 1-1.06-1.06L13.69 10 9.97 6.28a.75.75 0 0 1 1.06-1.06l4.25 4.25ZM6.03 5.22l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L8.69 10 4.97 6.28a.75.75 0 0 1 1.06-1.06Z" clip-rule="evenodd" />
                            </svg>
                            Laboratorio de Biología molecular
                        </a>
                    </li>
                    <li class="pb-2 mb-2">
                        <a href="#" class="flex items-center text-gray-900 hover:text-gray-600 no-underline">
                            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M15.28 9.47a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 1 1-1.06-1.06L13.69 10 9.97 6.28a.75.75 0 0 1 1.06-1.06l4.25 4.25ZM6.03 5.22l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L8.69 10 4.97 6.28a.75.75 0 0 1 1.06-1.06Z" clip-rule="evenodd" />
                            </svg>
                            Conservación de especies botánicas y entomológicas
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div> --}}
<div class="container mx-auto py-8 px-4">
    <div class="flex flex-wrap">
        <!-- Sección principal -->
        <div class="w-full lg:w-3/4 pr-0 lg:pr-8">
            <h1 class="text-4xl font-bold mb-4">Laboratorio de patología apícola</h1>
            <img src="https://via.placeholder.com/1000x500" alt="Geointeligencia" class="w-full h-auto mb-4">
            <p class="mb-4"><strong>Responsable:</strong> <a href="#" class="text-blue-600 underline">Mtro. Joel</a></p>
            <p class="text-gray-700 text-lg leading-relaxed">
                El <strong class="text-gray-800 underline">Laboratorio de patología apícola</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id elit non metus pharetra tincidunt eget in est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent tempor placerat arcu commodo semper. Nulla malesuada suscipit nisi, eu consequat lacus aliquam ut. Pellentesque rhoncus viverra tincidunt. Curabitur vel nibh id nibh semper mollis. Aliquam vehicula eros euismod gravida pulvinar. Nunc lobortis, turpis ut commodo scelerisque, elit odio vestibulum ante, sed euismod est metus id massa. Quisque consequat finibus tellus, vel iaculis risus dapibus sit amet. Nullam consequat venenatis nisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus tincidunt leo ac consectetur condimentum. Praesent tristique aliquam orci, vestibulum aliquet sem imperdiet id. Duis fringilla mi eget sem vulputate ultrices.
            </p>
        </div>
        <!-- Barra lateral -->
        <div class="w-full lg:w-1/4">
            <x-sidebar title="Laboratorios" :items="$sidebarItems" />
        </div>
    </div>
</div>
@endsection
