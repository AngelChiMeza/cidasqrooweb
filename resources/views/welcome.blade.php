@extends('layouts.app')

@section('titulo')
    Inicio
@endsection

@section('contenido')


        <!-- Carousel Slider -->


        {{-- <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden  md:h-[600px]">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="../img/img1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="../img/img2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="../img/img1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="../img/img2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="../img/img1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div> --}}
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden md:h-[600px]">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="../img/img1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div class="absolute bottom-4 left-4 text-left text-gray-600 bg-slate-200">
                        <h2 class="text-2xl font-bold">Título 1</h2>
                        <h3 class="text-md">Subtítulo 1</h3>
                        <p class="text-sm">Fecha: 2024-06-01</p>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="../img/img2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div class="absolute bottom-4 left-4 text-left text-gray-600 bg-slate-200">
                        <h2 class="text-2xl font-bold">Título 2</h2>
                        <h3 class="text-md">Subtítulo 2</h3>
                        <p class="text-sm">Fecha: 2024-06-02</p>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="../img/img1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div class="absolute bottom-4 left-4 text-left text-gray-600  bg-slate-200">
                        <h2 class="text-2xl font-bold">Título 3</h2>
                        <h3 class="text-md">Subtítulo 3</h3>
                        <p class="text-sm">Fecha: 2024-06-03</p>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="../img/img2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div class="absolute bottom-4 left-4 text-left text-gray-600  bg-slate-200">
                        <h2 class="text-lg font-bold">Título 4</h2>
                        <h3 class="text-md">Subtítulo 4</h3>
                        <p class="text-sm">Fecha: 2024-06-04</p>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="../img/img1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div class="absolute bottom-4 left-4 text-left text-gray-600  bg-slate-200">
                        <h2 class="text-lg font-bold">Título 5</h2>
                        <h3 class="text-md">Subtítulo 5</h3>
                        <p class="text-sm">Fecha: 2024-06-05</p>
                    </div>
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
        <div class="bg-gray-100">
            <!-- Sección de Bienvenida -->
            <div class="bg-gray-100 bg-opacity-80 py-8">
                <div class="container mx-auto px-4 flex flex-col items-center md:flex-row md:justify-between">
                    <!-- Logo -->
                    <div class="hidden md:flex flex-col items-center md:items-start text-center md:text-left md:w-1/3">
                        <img src="../img/logo_cidas.svg" alt="CIDASQROO Logo" class="w-32 h-32 md:w-80 md:h-80 mb-4 md:mb-0">
                    </div>
                    <!-- Mensaje de Bienvenida -->
                    <div class="flex flex-col items-center md:items-start text-center md:text-left md:w-1/3">
                        <div class="text-black">
                            <h1 class="text-red-900 text-3xl font-bold">BIENVENIDOS</h1>
                            <p class="mt-4">¡Bienvenidos al Centro de Innovación para el Desarrollo Apícola Sustentable de Quintana Roo! En nuestro compromiso por fomentar una apicultura responsable y sostenible, nos enorgullece ser pioneros en ofrecer servicios avanzados de análisis que contribuyen a la salud y la calidad de los productos apícolas de nuestra región.</p>
                        </div>
                    </div>
                    <!-- Video -->
                    <div class="w-full md:w-1/3 mt-8 md:mt-0 flex justify-center md:justify-end md:items-end">
                        <iframe class="w-full md:w-96 h-56 md:h-64" src="https://www.youtube.com/embed/hzpU87RInho" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <!-- Sección de Últimas Noticias -->
            <div class="bg-gray-100 bg-opacity-80 py-8">
                <div class="container mx-auto px-4">
                    <h1 class="text-3xl font-bold text-center mb-8">Últimas noticias</h1>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Noticia 1 -->
                        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                            <img src="../img/noticia1.png" alt="El consumo de berenjena" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <div class="bg-black text-white text-xs uppercase font-bold px-2 py-1 rounded-full inline-block">Noticias</div>
                                <h2 class="text-lg font-semibold mt-2">Construyendo puentes hacia la búsqueda de soluciones a los problemas socioecológicos en la Península de Yucatán</h2>
                                <p class="text-gray-500 text-sm">29 de mayo de 2024</p>
                                <p class="mt-4 text-gray-700">El Centro de Innovación para el Desarrollo Apícola Sustentable en Quintana Roo mantiene proyectos de vinculación con otras instituciones, tal es el caso del proyecto PRONAII “Construyendo puentes hacia la búsqueda de soluciones a los problemas socioecológicos en la Península de Yucatán” en vinculación con el INECOL y otras instituciones.</p>
                            </div>
                        </div>
                        <!-- Noticia 2 -->
                        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                            <img src="../img/noticia2.png" alt="Inclusión de estudiantes" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <div class="bg-black text-white text-xs uppercase font-bold px-2 py-1 rounded-full inline-block">Noticias</div>
                                <h2 class="text-lg font-semibold mt-2">Salidas a campo entre enero y febrero</h2>
                                <p class="text-gray-500 text-sm">29 de mayo de 2024</p>
                                <p class="mt-4 text-gray-700">Uno de los ejes principales que tiene el Centro de Innovación para el Desarrollo Apícola Sustentable en Quintana Roo es la vinculación comunitaria, por ello durante el mes de enero y dentro del marco del proyecto “Impulso a la Producción de la Meliponicultura para el Fortalecimiento de la Seguridad y Soberanía Alimentaria en Defensa del Territorio Biocultural en Municipios del Estado de Quintana Roo”.</p>
                            </div>
                        </div>
                        <!-- Noticia 3 -->
                        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                            <img src="../img/noticia3.png" alt="Simposio de Biomateriales Poliméricos" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <div class="bg-black text-white text-xs uppercase font-bold px-2 py-1 rounded-full inline-block">Noticias</div>
                                <h2 class="text-lg font-semibold mt-2">Intercambio de experiencias con el Centro de Atención Múltiple (CAM) de José María Morelos con niños desde los 4 hasta los 12 años.</h2>
                                <p class="text-gray-500 text-sm">29 de mayo de 2024</p>
                                <p class="mt-4 text-gray-700">Uno de los ejes principales que tiene el Centro de Innovación para el Desarrollo Apícola Sustentable en Quintana Roo es la vinculación comunitaria y la educación ambiental; por ello se realizó un intercambio de experiencias el pasado 02 de febrero de 2024 con el Centro de Atención Múltiple (CAM) de José María Morelos con niños desde los 4 hasta los 12 años.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        {{-- <div class="container mx-auto">


            <div class="bg-gray-100 ">
                <div class="container w-full mx-auto px-4 py-8">
                    <h1 class="text-3xl font-bold text-center mb-8">Últimas noticias</h1>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Noticia 1 -->
                        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                            <img src="../img/noticia1.png" alt="El consumo de berenjena" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <div class="bg-black text-white text-xs uppercase font-bold px-2 py-1 rounded-full inline-block">Noticias</div>
                                <h2 class="text-lg font-semibold mt-2">Construyendo puentes hacia la búsqueda de soluciones a los problemas socioecológicos en la Península de Yucatán</h2>
                                <p class="text-gray-500 text-sm">29 de mayo de 2024</p>
                                <p class="mt-4 text-gray-700">El Centro de Innovación para el Desarrollo Apícola Sustentable en Quintana Roo mantiene proyectos de vinculación con otras instituciones, tal es el caso del proyecto PRONAII “Construyendo puentes hacia la búsqueda de soluciones a los problemas socioecológicos en la Península de Yucatán” en vinculación con el INECOL y otras instituciones</p>
                            </div>
                        </div>
                        <!-- Noticia 2 -->
                        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                            <img src="../img/noticia2.png" alt="Inclusión de estudiantes" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <div class="bg-black text-white text-xs uppercase font-bold px-2 py-1 rounded-full inline-block">Noticias</div>
                                <h2 class="text-lg font-semibold mt-2">Salidas a campo entre enero y febrero</h2>
                                <p class="text-gray-500 text-sm">29 de mayo de 2024</p>
                                <p class="mt-4 text-gray-700">Uno de los ejes principales que tiene el Centro de Innovación para el Desarrollo Apícola Sustentable en Quintana Roo es la vinculación comunitaria, por ello durante el mes de enero y dentro del marco del proyecto “Impulso a la Producción de la Meliponicultura para el Fortalecimiento de la Seguridad y Soberanía Alimentaria en Defensa del Territorio Biocultural en Municipios del Estado de Quintana Roo”</p>
                            </div>
                        </div>
                        <!-- Noticia 3 -->
                        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                            <img src="../img/noticia3.png" alt="Simposio de Biomateriales Poliméricos" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <div class="bg-black text-white text-xs uppercase font-bold px-2 py-1 rounded-full inline-block">Noticias</div>
                                <h2 class="text-lg font-semibold mt-2">Intercambio de experiencias con el Centro de Atención Múltiple (CAM) de José María Morelos con niños desde los 4 hasta los 12 años.</h2>
                                <p class="text-gray-500 text-sm">29 de mayo de 2024</p>
                                <p class="mt-4 text-gray-700">Uno de los ejes principales que tiene el Centro de Innovación para el Desarrollo Apícola Sustentable en Quintana Roo es la vinculación comunitaria y la educación ambiental; por ello se realizó un intercambio de experiencias el pasado 02 de febrero de 2024 con el Centro de Atención Múltiple (CAM) de José María Morelos con niños desde los 4 hasta los 12 años.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> --}}
@endsection
