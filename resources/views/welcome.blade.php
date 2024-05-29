@extends('layouts.app')

@section('titulo')
    Inicio
@endsection

@section('contenido')
    <!-- Carousel Slider -->


        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
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
        </div>




    {{-- <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });

    </script> --}}
    <!-- Contenido principal -->
        <main class="container mx-auto my-4 p-4">
        <div class="flex flex-col items-center">
            <!-- Área de ceremonia de premiación y foto de grupo -->
        </div>
        <section class="text-gray-700">
            <!-- Texto de bienvenida -->
            <p class="text-5xl font-bold pb-300 text-red-800 ">Bienvenidos</p>
            <br>
            <br>
            <p class="text-25xl ">
                ¡Bienvenidos al Centro de Innovación para el Desarrollo Apícola Sustentable de Quintana Roo! En nuestro compromiso por fomentar una apicultura responsable y sostenible, nos enorgullece ser pioneros en ofrecer servicios avanzados de análisis que contribuyen a la salud y la calidad de los productos apícolas de nuestra región. Nuestro centro está equipado con la tecnología más moderna para realizar análisis físico-químicos y de extracción de ADN de la miel, garantizando así la pureza y la autenticidad de los productos que llegan a sus manos. Con el respaldo de expertos en la materia, nos dedicamos a asegurar la excelencia y la sostenibilidad en cada eslabón de la cadena apícola. <br>
                <br>

                Entendemos la importancia de la apicultura no solo para la economía de Quintana Roo, sino también para el equilibrio de nuestros ecosistemas. Por eso, además de nuestros servicios de análisis, ofrecemos asesorías y capacitaciones para apicultores, promoviendo prácticas innovadoras y sustentables en el manejo de las colmenas. Nuestro objetivo es ser un referente en la investigación y el desarrollo apícola, contribuyendo así a una industria más fuerte, saludable y sostenible. Invitamos a apicultores, investigadores y a todos los interesados en el bienestar de nuestras abejas a conocer más sobre nuestros servicios y a unirse a nosotros en este viaje hacia un futuro más dulce y sustentable.
            </p>
        </section>
        </main>
@endsection
